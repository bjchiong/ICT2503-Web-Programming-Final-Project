<?php

class PostSeeder extends Seeder {
    public function run()
    {
        $post = new Post;
        $post->name = 'Rembrandt';
        $post->title = 'Hello world';
        $post->message = 'Hello, this is my first post';
        $post->privacy = 'public';
        $user = User::find(1);
//      $user->posts()->save($post);
        $post->user()->associate($user);
        $post->save();

    }
}

