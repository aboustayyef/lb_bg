<?php namespace Bluegallery\Models;

class Category extends \Eloquent{

	protected $table = "categories";
	protected $fillable = ['id','name','image','description','parent_ID','slug'];
}

?>