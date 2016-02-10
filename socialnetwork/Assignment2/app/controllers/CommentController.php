<?php

class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$comments = Comment::all();
		return View::make('comment.index', compact('comments'));	
		
		$post = Post::find($id);
		return View::make('comment.index', compact('comments', 'post'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$comments = Comment::all();
		return View::make('comment.index', compact('comments'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Comment::$rules);
		if ($v->passes())
		{
		$comment = new Comment;
		$comment->name = $input['name'];
		$comment->message = $input['message'];
		$id = $input['id'];
		$comment->post_id = $id;
		$comment->save();	
		   return Redirect::to(URL::previous());
		} else {
		   return Redirect::to(URL::previous())->withErrors($v);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		$comments = Comment::whereRaw('post_id = ?', array($id))->paginate(5);
		return View::make('comment.index', compact('comments', 'post'));		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	$input = Input::all();
		$v = Validator::make($input, Comment::$rules);
		if ($v->passes())
		{
		$comment = new Comment;
		$comment->name = $input['name'];
		$comment->message = $input['message'];
		$comment->post_id = $id;
		$comment->save();	
		   return Redirect::route('comment.show($id)');
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comment = Comment::find($id);
		$comment->delete();
		return Redirect::to(URL::previous());
	}


}
