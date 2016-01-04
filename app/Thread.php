<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //
    protected $fillable = [
        
        'title',
        'created_by',
        'owner_id'
    ];
    
    
    public function forum(){
        return $this->belongsTo('App\Forum');
    }
    
    public function post(){
        return $this->hasMany('App\Post');
    }
    
}
