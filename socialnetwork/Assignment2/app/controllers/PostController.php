<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
// takes the user_id from Auth() and queries them	 
	public function index()
	{
		$id = Auth::user()->id;
		$posts = Post::whereRaw('user_id = ?', array($id))->get();
		return View::make('post.index', compact('posts'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$posts = Post::all();
		return View::make('post.index', compact('posts'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	 
	public function store()
	{
		$input = Input::all();
//		$v = Validator::make($input, Post::$rules);
//		if ($v->passes())
//		{
		$post = new Post;
		$userid = Auth::user()->id;
		$post->user_id = Auth::user()->id;
		$post->name = $input['name'];
		$post->title = $input['title'];
		$post->message = $input['message'];
		$post->privacy = $input['privacy'];
		$post->save();	
		   return Redirect::action('post.index');
//		} else {
//		   return Redirect::action('PostController@create')->withErrors($v);
//		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$posts = Post::whereRaw('user_id = ?', array($id))->get();
		return View::make('post.index', compact('posts'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('post.edit', compact('post'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		
		$input = Input::all();
//		$v = Validator::make($input, Post::$rules);
//		if ($v->passes())
//		{
		$post->name = $input['name'];
		$post->title = $input['title'];
		$post->message = $input['message'];
		$post->save();
		
		return Redirect::action('post.index', array($post->id));
//		} else {
			//Show validation errors
//			return Redirect::action('PostController@edit',  array($post->id))->withErrors($v);
//	}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::route('post.index');
	}


}
