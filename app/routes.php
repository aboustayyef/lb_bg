<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::get('collection/{a?}/{b?}/{c?}/{d?}', function(){
    $request = Request::path();
    $target = new \Bluegallery\Navigation\UrlResolver($request);
    var_dump($target->analyze());
});

Route::get('/test',function(){
	return (new \Bluegallery\Presentation\Navbar)->build();
});

// Seeding only

Route::get('initialseed', function(){
    // (new Bluegallery\OldDataImporter)->importOldCategories();
    // (new Bluegallery\OldDataImporter)->importOldProducts();
    (new Bluegallery\OldDataImporter)->importOldVariants();
});