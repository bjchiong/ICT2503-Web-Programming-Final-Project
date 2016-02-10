<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


// Logs in user		 
	public function login ()
	{
		
	    $input = Input::all();
	    $email = $input['email'];
	    $password = $input['password'];
	    if (Auth::attempt(array('email' => $email, 'password' => $password))) {
	    $id = Auth::user()->id;
	    return Redirect::action('post.index');	
	    } else {
	    Session::put('login_error', 'Login failed');
	    return Redirect::to(URL::previous());
		}
	
	}
		
// Logs out user	
	public function logout ()
	{
	    Auth::logout();
	    return Redirect::to(secure_url('/'));
	}
	
// Queries Users with 'LIKE'	 
	public function search()
	{
		$input = Input::all();
		$name = $input['fullname'];
		$users = User::whereRaw('fullname LIKE ?', array("%$name%"))->get();// query with name
		return View::make('user.index', compact('users'));		
	}
	
	public function index()
	{

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$password = $input['password'];
		$encrypted = Hash::make($password);
		$v = Validator::make($input, User::$rules);
		if ($v->passes())
		{
		$user = new User;
		$user->email = $input['email'];
		$user->password = $encrypted;
		$user->fullname = $input['fullname'];
		$user->birthday = $input['birthday'];
		$user->save();	
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
		$user = User::find($id);
		$posts = Post::whereRaw('user_id = ?', array($id))->get();
		return View::make('user.profile', compact('posts', 'user'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('user.edit', compact('user'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);
		$input = Input::all();
		$password = $input['email'];
		$encrypted = Hash::make($password);
//		$v = Validator::make($input, Post::$rules);
//		if ($v->passes())
//		{
		$user->email = $input['email'];
		$user->fullname = $input['fullname'];
		$user->password = $encrypted;
		$user->birthday = $input['birthday'];
		$user->save();
		
		return Redirect::action('post.index', array($user->id));
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
		//
	}


}
