<?php namespace Bluegallery;

// import from old data to new data

// first test
/**
*
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

    public function importOldProducts(){
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

}

?>