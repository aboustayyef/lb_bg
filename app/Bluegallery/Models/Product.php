<?php namespace Bluegallery\Models;

/*
|--------------------------------------------------------------------------
| What is a "Product?"
|--------------------------------------------------------------------------
| A product is a physical, countable item that is for sale.
| Products inherit their name and description from the parent category.
| They are differentiated only in dimensions, colors and other technical details from other products in the same category
| They don't have slugs, only ID numbers
| for example: An Elsa couch is not a product. The blue Elsa couch in stock is.
| If a category only has one product, the category page becomes the particular's product page.
*/

class Product extends \Eloquent{
	protected $table = "products";

    public function parent(){
        return Category::find($this->category_ID);
    }

}

?>