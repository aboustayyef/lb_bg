<?php namespace Bluegallery\Navigation;

use \Bluegallery\Models\Category;
use \Bluegallery\Models\Product;

/**
*   navigates the slug hierarchy to find which category/product the URL points at
*   Input: @string [collection/]path/to/category[/productid]
*   Output: array ['kind', 'identifyer'];
*/

class UrlResolver
{
    private $request;
    private $requestParts;
    private $kindOfPage; //product or category

    function __construct($request)
    {
        $this->request = $request;
        $this->splitRequest();
    }

    private function splitRequest(){
        $this->requestParts = preg_split('#\s*\/\s*#', $this->request);
        if ($this->requestParts[0] == 'collection') {
            array_shift($this->requestParts);
        }
    }

    public function analyze(){
        $category = 0;
        $product = 0;
        foreach ($this->requestParts as $key => $part) {
            //echo "Analyzing part $part\n"; //for debuging
            if ($key == 0) {
                // first item is always a category
                $exists = Category::where('slug', $part)->where('parent_ID',0)->get();
                if ($exists->count() == 0) {
                    return false;
                }
                $category = $exists->first()->id;
            } else {
                if (is_numeric($part)) { // if it's a product, not category
                    $product = Product::find($part);
                    if (!$product) {
                        return false;
                    }else{
                        if ($product->category_ID == $category) {
                            return ['product', $part];
                        }else {
                            return false;
                        }
                    }
                }
                $exists = Category::where('slug',$part)->where('parent_ID', $category)->get();
                if ($exists->count() == 0) {
                    return false;
                }
                $category = $exists->first()->id;
            }

        }
            return ['category', $category];
        ;
    }

}