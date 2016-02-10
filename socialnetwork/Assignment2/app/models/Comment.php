<?php

    class Comment extends Eloquent{
        
        public static $rules = array( 
        'title' => 'required|min:5',
        'message' => 'required'
    );    
        
    }

