<?php

class CommentSeeder extends Seeder {
    public function run()
    {
        $comment = new Comment;
        $comment->name = 'Joe';
        $comment->message = 'Welcome to Art Society';
     //   $post = Post::find(1);
     //   $post->comments()->save($comment);


    }
}