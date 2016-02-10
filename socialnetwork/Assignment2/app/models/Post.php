<?php

    class Post extends Eloquent{
        
        function user()
        {
            return $this->belongsTo('User');
        }	
        
        function comments()
        {
            return $this->hasMany('Comment');
        }
    
    public static $rules = array( 
        'name' => 'required|min:5', 
        'title' => 'required',
        'message' => 'required'
    );    
            
}
    

