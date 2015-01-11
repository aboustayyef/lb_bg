<?php namespace Bluegallery\Navigation;

use \Bluegallery\Models\Category;
use \Bluegallery\Models\Product;

/**
*   makes a URL from an object identifier;
*   Input: $kin@string [collection/]path/to/category[/productid]
*   Output: '/collection/path/to/item'
*/

class UrlMaker
{
    private $kind; // 'product' or 'category'
    private $id;

    function __construct($kind, $id)
    {
        $this->kind = $kind;
        $this->id = $id;
    }

    public function build(){

        $outcome = '';

        if ($this->kind == 'product') {
            $product = Product::find($this->id);

            // If product doesn't exist, abort
            if ($product->count() == 0 ) {
                return false;
            }

            // otherwise, find containing category
            $outcome = '/'.$product->id;
            $category = $product->parent();
            $this->id = $category->id;
        }

        if (!isset($category)) {
            $category = Category::find($this->id);
            if ($category->count() == 0) {
                return false;
            }
        }

        while ($category->hasParent()) {
            $outcome = '/'.$category->slug . $outcome;
            $category = $category->parent();
        }
        $outcome = '/'.$category->slug . $outcome;
        $outcome = 'collection' . $outcome;

        return $outcome;

    }



}