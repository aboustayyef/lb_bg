<?php namespace Bluegallery;

/**
*   This is the seeding class for importing the database of the old version of the wesbite
*   It is to be only used at the beginning when the database is still new and empty
*/

class OldDataImporter
{
    public function importOldCategories(){
        $allOldCategories = \Bluegallery\OldModels\Oldcategory::all();
        foreach ($allOldCategories as $key => $oldCategory) {
            $newItem = new \Bluegallery\Models\Category;
            $newItem->id = $oldCategory->id;
            $newItem->name = $oldCategory->name;
            $newItem->image = $oldCategory->poster;
            $newItem->description = $oldCategory->description;
            $newItem->parent_ID = $oldCategory->parent_id;
            $newItem->slug = \Str::slug($oldCategory->name);
            $newItem->save();
        }
        return 'Import succesful';
    }

    public function importOldProducts(){ // import to categories table
        $allOldProducts = \Bluegallery\OldModels\Oldproduct::all();
        foreach ($allOldProducts as $key => $oldProduct) {
            $newItem = new \Bluegallery\Models\Category;
            $newItem->id = $oldProduct->id + 500;
            $newItem->name = $oldProduct->name;
            $newItem->description = $oldProduct->description;
            $newItem->parent_ID = $oldProduct->parent_id;
            $newItem->slug = \Str::slug($oldProduct->name);
            $newItem->save();
        }
    }

    public function importOldVariants(){ // import to products table
        $allOldVariants = \Bluegallery\OldModels\Oldvariant::all();
        foreach ($allOldVariants as $key => $OldVariant) {
            $newItem = new \Bluegallery\Models\Product;
            $newItem->id = $OldVariant->id;
            $newItem->technicalDetails = $OldVariant->Variant_Name;
            $newItem->category_ID = $OldVariant->Parent_Product_ID + 500;
            $newItem->amountInStock = $OldVariant->Amount_In_Stock;
            $newItem->sellingPrice = $OldVariant->Variant_Price;
            $newItem->save();
        }
    }
}

?>

  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;