<?php namespace Bluegallery\Presentation;

use \Bluegallery\Models\Category;
use \Bluegallery\Models\Product;
use \Bluegallery\Helpers;
use \Cache;

/**
* renders Navigation bar
*/
class Navbar
{
	public function build(){
		if (Cache::has('navbar')) {
			return Cache::get('navbar');
		}
		$navbar = '<ul>';
		$toplevel = (new Category)->topLevel();
		foreach ($toplevel as $key => $section) {
			$navbar .= '<li><a href="'.$section->link().'">'.$section->name.'</a></li>';
			$subsections = $section->children();
			$navbar .= '<ul>';
				foreach ($subsections as $key => $subsection) {
					$navbar .= '<li><a href="'.$subsection->link().'">' . $subsection->name . '</a></li>';
				}
			$navbar .= '</ul>';
		}
		$navbar .= '</ul>';
		Cache::put('navbar', $navbar, 60 * 24 * 3);
		return Cache::get('navbar');
	}
}

?>