<?php namespace Bluegallery\Presentation;

use \Bluegallery\Models\Category;
use \Bluegallery\Models\Product;
use \Bluegallery\Helpers;

/**
* renders Navigation bar
*/
class Navbar
{
	public function build(){
		$navbar = '<ul>';
		$toplevel = (new Category)->topLevel();
		foreach ($toplevel as $key => $section) {
			$navbar .= '<li>'.$section->name.'</li>';
			$subsections = $section->children();
			$navbar .= '<ul>';
				foreach ($subsections as $key => $subsection) {
					$navbar .= '<li>' . $subsection->name . '</li>';
				}
			$navbar .= '</ul>';
		}
		$navbar .= '</ul>';
		return $navbar;
	}
}

?>