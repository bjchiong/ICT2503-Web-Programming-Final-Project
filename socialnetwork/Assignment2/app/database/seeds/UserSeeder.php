<?php

class UserSeeder extends Seeder {
    public function run()
    {
        $user = new User;
	    $user->email = 'jsmith@gmail.com';
	    $encrypted = Hash::make('johnsmith');
		$user->password = $encrypted;
		$user->fullname = 'John';
		$user->birthday = '16/6/1978';
        $user->save();
        
        $user = new User;
	    $user->email = 'monkeycoder@gmail.com';
	    $encrypted = Hash::make('trisha');
		$user->password = $encrypted;
		$user->fullname = 'Trisha';
		$user->birthday = '10/4/1990';
        $user->save();
    }
}