<?php namespace Bluegallery\Models;

class Category extends \Eloquent{

	protected $table = "categories";
	protected $fillable = ['id','name','image','description','parent_ID','slug'];

    public function topLevel(){
        return $this->where('parent_ID',0)->get();
    }

    public function hasParent(){
        return ($this->parent_ID != 0);
    }

    public function parent(){
        if ($this->hasParent()) {
            return $this->where('id', $this->parent_ID)->first();
        }
        return false;
    }

    public function children(){
        $exists = $this->where('parent_Id', $this->id)->get();
        if ($exists->count() == 0) {
            return false;
        } 
        return $exists;
        // categories only for now. Add products later
    }
}

?>