<?php

class FriendSeeder extends Seeder {
    public function run()
    {
     //   $friend = new Friend;
        $user = User::find(1);
        $friend = User::find(2);
        $user->friends()->attach($friend->id);
        $friend->friends()->attach($user->id);
        $friend->save();
        
        $user = User::find(1);
        $friend = User::find(3);
        $user->friends()->attach($friend->id);
        $friend->friends()->attach($user->id);
        $friend->save();

        $user = User::find(1);
        $friend = User::find(4);
        $user->friends()->attach($friend->id);
        $friend->friends()->attach($user->id);
        $friend->save();    
        
        $user = User::find(1);
        $friend = User::find(5);
        $user->friends()->attach($friend->id);
        $friend->friends()->attach($user->id);
        $friend->save();  
        
        $user = User::find(1);
        $friend = User::find(6);
        $user->friends()->attach($friend->id);
        $friend->friends()->attach($user->id);
        $friend->save();  
        
    }
}