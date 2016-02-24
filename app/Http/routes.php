<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* // Return Hello World! on the /hello page
Route::get('/hello', function() {
	return 'Hello World!';
});
*/

/*// Return Hello index() func on the /hello page 
Route::get('/hello','Hello@index');
*/

/*// Return basic view from Front.php Controller. 
Route::get('/','Front@index');
Route::get('/products','Front@products');
Route::get('/products/details/{id}','Front@product_details');
Route::get('/products/categories','Front@product_categories');
Route::get('/products/brands','Front@product_brands');
Route::get('/blog','Front@blog');
Route::get('/blog/post/{id}','Front@blog_post');
Route::get('/contact-us','Front@contact_us');
Route::get('/login','Front@login');
Route::get('/logout','Front@logout');
Route::get('/cart','Front@cart');
Route::get('/checkout','Front@checkout');
Route::get('/search/{query}','Front@search');
*/


// Return Hello users($name) func on the hello page
Route::get('/hello/{name}', 'Hello@show');

Route::get('/','Front@index');
Route::get('/products','Front@products');
Route::get('/products/details/{id}','Front@product_details');
Route::get('/products/categories/{name}','Front@product_categories');
Route::get('/products/brands/{name}/{category?}','Front@product_brands');
Route::get('/blog','Front@blog');
Route::get('/blog/post/{id}','Front@blog_post');
Route::get('/contact-us','Front@contact_us');
Route::get('/login','Front@login');
Route::get('/logout','Front@logout');
Route::get('/cart','Front@cart');
Route::get('/checkout','Front@checkout');
Route::get('/search/{query}','Front@search');

Route::get('blade', function () {
    $drinks = array('Vodka','Gin','Brandy');
    return view('page',array(
    	'name' => 'The Raven',
    	'day' => 'Friday',
    	'drinks' => $drinks));
});

/*	Eloquent ORM insert

    App\Category::create(array('name' => 'Music')); executes the create static function of the model. The array array('name' => 'Music') matches field names to values. Eloquent model will use these values to generate the SQL insert statement and execute it.
    return 'category added'; outputs category added in the web browser

*/
    Route::get('/insert', function() {
	App\Category::create(array('name' => 'Music'));
	return 'Category added';
});

/*	Eloquent ORM Read

    $category = new App\Category(); creates an instance variable of Category model
    $data = $category->all(array('name','id')); calls the all method of the model. The array parameter array('name','id') is used to specified the column names that the query should return. If left blank, then all columns will be returned.
    foreach ($data as $list){…} loops through the returned results and displays the rows in the browser.
*/
Route::get('/read', function() {
	$category = new App\Category();

	$data = $category->all(array('name', 'id'));

	foreach ($data as $list) {
		echo $list->id . ' ' . $list->name . ' ';
	}
});


/*	Eloquent ORM Update

	$category = App\Category::find(16); call find function of the model and pass in 16 as the primary key parameter value. Eloquent will return a record with primary key value 16
	$category->name = 'HEAVY METAL'; assigns the value HEAVY METAL to the name field
	$category->save(); saves the changes made to the record
	$data = $category->all(array('name','id')); retrieves all the categories
	foreach ($data as $list){…} loops through all the records and display the value in the web browser
*/
Route::get('/update', function() {
    $category = App\Category::find(7);

    $category->name = 'Heavy Metal';

    $category->save();

    $data = $category->all(array('name', 'id'));

    foreach ($data as $eachdata) {
    	echo $eachdata->id . ' ' . $eachdata->name . ' ';
    }
});

/*	Eloquent ORM Delete
	
	$category->delete(); deletes the record that was retrieved via the find method
*/
Route::get('/delete', function() {
	$category = App\Category::find(7);

	$category->delete();

	$data = $category->all(array('name', 'id'));

	foreach ($data as $list) {
		echo $list->id . ' ' . $list->name . ' ';
	}
});