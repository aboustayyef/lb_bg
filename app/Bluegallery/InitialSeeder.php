<?php namespace Bluegallery;

/**
* 
*/
class InitialSeeder 
{
	public function seed(){
		$this->seedTopLevel();
	}
	
	public function seedTopLevel()
	{
		// Top Level
		$record = new Category;
		$record->name = "Living Room";
		$record->parent_ID = 0;
		$record->description = "Living room";
		$record->slug = "living-room";
		$record->save();

		$record = new Category;
		$record->name = "Dining Room";
		$record->parent_ID = 0;
		$record->description = "Dining room";
		$record->slug = "dining-room";
		$record->save();

		$record = new Category;
		$record->name = "Bed Room";
		$record->parent_ID = 0;
		$record->description = "Bed room";
		$record->slug = "bed-room";
		$record->save();

		$record = new Category;
		$record->name = "Decor and Accessories";
		$record->parent_ID = 0;
		$record->description = "Decor and Accessories";
		$record->slug = "decor-accessories";
		$record->save();


		$record = new Category;
		$record->name = "Office Furniture";
		$record->parent_ID = 0;
		$record->description = "Office Furniture";
		$record->slug = "office-furniture";
		$record->save();
		
	}
}

?>