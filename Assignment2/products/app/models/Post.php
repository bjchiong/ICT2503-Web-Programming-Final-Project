<?php

    class Post extends Eloquent{
        
        function comments()
        {
            return $this->hasMany('Comment');
        }
            
}
    

