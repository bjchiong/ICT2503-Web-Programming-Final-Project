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

// load sample data
require "models/posts.php";

Route::get('/', function()
{
  
    $posts = getPosts1();
    $size = getSize();
    
	return View::make('sub.snpage')->withPosts($posts)->withSize($size);
});

Route::get('commentspage', function()
{
    $comments = getComments();
    
	return View::make('sub.commentspage')->withComments($comments);
});

// loads comments page
//Route::get('commentspage', function()
//{
    
//	return View::make('sub.commentspage');
//});

//route comment


Route::get('/{id}', function($id)
{
  $post = get_post($id);
   $comments = getComments($id);  
	return View::make('sub.commentspage')->withPost($post)->withComments($comments);
});

//loads edit page

// Post route

Route::post('add_post_action', function()
{
  $author = Input::get('author');
  $title = Input::get('title');
  $message = Input::get('message'); 
  
  $id = add_post($author, $title, $message);

  // If successfully created then display newly created item
  if ($id) 
  {
    return Redirect::to(secure_url("/"));
  } 
  else
  {
    die("Error adding item");
  }
});

Route::post('add_comment_action', function()
{
  $postid = Input::get('id');
  $author = Input::get('author');
  $message = Input::get('message');
  $id = add_comment($postid, $author, $message);

  // If successfully created then display newly created item

    return Redirect::to(url("sub.commentspage"));
});


// loads edit page
Route::get('editpage/{id}', function($id)
{
  $post = get_post($id);
    
	return View::make('sub.editpage')->withPost($post);
});


Route::post('update_post_action', function()
{
    $id = Input::get('id');
    $author = Input::get('author');
    $title = Input::get('title');
    $message = Input::get('message');
   
   update_post($id, $author, $title, $message);
   
   return Redirect::to(secure_url("/"));
 
});

// Delete route

Route::get('delete_post_action/{id}', function($id)
{
   $deleted = delete_post($id); 
   
// If successfully delete then display newly created item
   return Redirect::to(secure_url("/"));
});

// delete post
Route::get('delete_comment_action/{id}', function($id)
{
   $deleted = delete_comment($id); 
   
// If successfully delete then display newly created item
   return Redirect::to(url("sub.commentspage"));
});

function getSize() {
  $posts =  getPosts();
  $size = count($posts);
  return $size;
}

//function getSize1($id) {
//  $sql = "select count(*) from comment where postid=i?";
//  $size = DB::select($sql, array($id));
//  return $size;
//}


function getPosts1() {
  $sql = "select * from post order by id desc";
  $posts = DB::select($sql);
  return $posts;
}

function getComments($id) {
  $sql = "select c.message, c.author, c.postid, c.id from comment c, post p where p.id = postid AND postid= ?";
  $comments = DB::select($sql, array($id));
  return $comments;
}

function add_post($author, $title, $message) 
{
  $sql = "insert into post (author, title, message) values (?, ?, ?)";

  DB::insert($sql, array($author, $title, $message));

  $id = DB::getPdo()->lastInsertId();

  return $id;
}

function add_comment($postid, $author, $message) 
{
  $sql = "insert into comment (postid, author, message) values ( ?, ?, ?)";

  DB::insert($sql, array($postid, $author, $message));

  $id = DB::getPdo()->lastInsertId();

  return $id;
}

function get_post($id)
{
	$sql = "select id, title, author, message from post where id = ?";
	$posts = DB::select($sql, array($id));

	// If we get more than one item or no items display an error
	if (count($posts) != 1) 
	{
    die("Invalid query or result");
  }

	// Extract the first item (which should be the only item)
  $post = $posts[0];
	return $post;
}

function update_post($id, $author, $title, $message)
{
  $sql = "UPDATE post set author = ?, title = ?, message = ? where id = ?";
  
  DB::update($sql, array($author, $title, $message, $id));
}

function delete_post($id)
{
  $sql = "DELETE FROM post WHERE id = ?";

  DB::delete($sql, array($id));
}

function delete_comment($id)
{
  $sql = "DELETE FROM comment WHERE id = ?";

  DB::delete($sql, array($id));
}

