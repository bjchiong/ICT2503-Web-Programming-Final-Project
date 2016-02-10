<?php

class UserSeeder extends Seeder {
    public function run()
    {
        $user = new User;
	    $user->email = 'jsmith@gmail.com';
	    $encrypted = Hash::make('johnsmith');
		$user->password = $encrypted;
		$user->fullname = 'John';
		$user->birthday = '16/6/16';
        $user->save();
    }
}