<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Load sample data, an array of associative arrays. */
require "models/pms.php";


// Display search form
Route::get('/', function()
{
	return View::make('pms.query');

});


// Perform search and display results
Route::get('search', function()
{
  $name = Input::get('name');
  $start = Input::get('start');
  $state = Input::get('state');

  $results = search($name, $start, $state);
  
	return View::make('pms.results')->withUsers($results)->withName($name)->withStart($start)->withState($state);

});


/* Functions for PM database example. */

/* Search sample data for $name or $year or $state from form. */
function search($name, $start, $state) {
  $sql = "SELECT * FROM pms WHERE name LIKE ? AND start LIKE ? AND state LIKE ?";
  $results = DB::select($sql, array("%$name%", "%$start%", "%$state%"));

  return $results;
}