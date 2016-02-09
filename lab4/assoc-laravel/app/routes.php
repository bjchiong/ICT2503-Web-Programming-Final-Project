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
  $address = Input::get('address');
  $phone = Input::get('phone');
  $email = Input::get('email');

  $results = search($name, $address, $phone, $email);
  
	return View::make('pms.results')->withUsers($results)->withName($name)->withAddress($address)->withPhone($phone)->withEmail($email);

});


/* Functions for PM database example. */

/* Search sample data for $name or $year or $state from form. */
function search($name, $address, $phone, $email) {
  $users = getUsers();

  // Filter $pms by $name
  if (!empty($name)) {
    $results = array();
    foreach ($users as $user) {
      if (stripos($user['name'], $name) !== FALSE) {
        $results[] = $user;
      }
    }
    $users = $results;
  }

  // Filter $pms by $year
  if (!empty($address)) {
    $results = array();
    foreach ($users as $user) {
      if (strpos($user['address'], $address) !== FALSE) {
        $results[] = $user;
      }
    }
    $users = $results;
  }

  // Filter $pms by $state
  if (!empty($phone)) {
    $results = array();
    foreach ($users as $user) {
      if (stripos($user['phone'], $phone) !== FALSE) {
        $results[] = $user;
      }
    }
    $users = $results;
  }
  
  // Filter $pms by $state
  if (!empty($email)) {
    $results = array();
    foreach ($users as $user) {
      if (stripos($user['email'], $email) !== FALSE) {
        $results[] = $user;
      }
    }
    $users = $results;
  }  

  return $users;
}