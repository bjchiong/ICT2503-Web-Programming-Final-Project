<?php

class PostSeeder extends Seeder {
    public function run()
    {
        $post = new Post;
        $post->name = 'Rembrandt';
        $post->title = 'Hello world';
        $post->message = 'Hello, this is my first post';
        $post->save();


    }
}