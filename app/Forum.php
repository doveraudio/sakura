<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    protected $fillable = [
        'parent_id',
        'created_by',
        'owned_by',
        'title',
        'description'
    ];
    
    public function parent(){
        return $this->hasOne('Forum', 'id', 'parent_id');
    }
    
    public function thread(){
        return $this->hasMany('App\Thread');
    }
    
    public function post(){
        return $this->hasManyThrough('App\Post', 'App\Thread');
    }
    
    public function created_by(){
        
        return $this->belongsTo('App\User', 'id', 'created_by');
    }
    public function owner(){
        
        return $this->belongsTo('App\User', 'id', 'owned_by');
    }
}
