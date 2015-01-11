<?php namespace Bluegallery\Models;

class Category extends \Eloquent{

	protected $table = "categories";
	protected $fillable = ['id','name','image','description','parent_ID','slug'];

    public function hasParent(){
        return ($this->parent_ID != 0);
    }

    public function parent(){
        if ($this->hasParent()) {
            return $this->where('id', $this->parent_ID)->first();
        }
        return false;
    }
}

?>