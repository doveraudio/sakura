<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserViewController extends Controller
{
    //
    public function home(Request $request){
        return json_encode($request);
        
    }
    
    
    
    
}
