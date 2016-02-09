<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function login ()
	{
		
	    $input = Input::all();
	    $username = $input['username'];
	    $password = $input['password'];
	    if (Auth::attempt(array('username' => $username, 'password' => $password))) {
	    return Redirect::to(URL::previous());
	    } else {
	    Session::put('login_error', 'Login failed');
	    return Redirect::to(URL::previous());
	    
		}
	
	}
		
	
	
	public function logout ()
	{
	    Auth::logout();
	    return Redirect::route('product.index');
	}
	
	public function index()
	{
		$products = Product::all();
		return View::make('product.index', compact('products'));
		
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
		$user->username = $input['username'];
		$user->password = $encrypted;
		$user->save();	
		   return Redirect::action('UserController@create');
		} else {
		   return Redirect::action('UserController@create')->withErrors($v);
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
		//
	}


}
