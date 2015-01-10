<?php namespace Bluegallery;

class Category extends \Eloquent{

	protected $table = "categories";	
	protected $fillable = ['name','description','parent_ID','slug'];
	public function success(){
		return "success!";
	}	
}

?>