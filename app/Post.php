<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'user_id',
        'thread_id',
        'body'
        
    ];
    
    public function thread(){
        return $this->belongsTo('App\Thread');
    }
    
    
   
}
