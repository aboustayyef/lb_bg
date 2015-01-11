<?php namespace Bluegallery;

/**
* Helpers
*/
class Helpers
{

    public static function linkToCategory($id){
        return getenv('WEBPATH') . (new \Bluegallery\Navigation\UrlMaker('category',$id))->build();
    }

    public static function linkToProduct($id){
        return getenv('WEBPATH') . (new \Bluegallery\Navigation\UrlMaker('product',$id))->build();
    }

    public static function image($pathToImage){
        return getenv('WEBPATH') . 'img/'.$pathToImage;
    }

}

?>