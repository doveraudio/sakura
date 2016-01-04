<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Forum as Forum;
use Auth;
class ForumController extends Controller
{
    protected $user; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       return json_encode(Forum::all());
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forum = [];
        $response = new \Illuminate\Http\Response();
        $response->content($forum);
        $response->setStatusCode(200);
        return json_encode($forum);
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = $request->user();
        $data = ['title'=>Input::get('title'), 'description'=>Input::get('description'), 'created_by'=> $user->id, 'owned_by' => $user->id];
        $forum = new Forum($data);
        return json_encode($forum);
        if($forum = Forum::create($forum)){
            return json_encode($forum);
            $success = new \Illuminate\Http\Response();
            $success->content('');
            $success->setStatusCode(200);
            return $success;
        }else{
            $failure = new \Illuminate\Http\Response();
            $failure->content($json);
            $failure->setStatusCode(400);
            return $failure;
            
        }
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $forum = Forum::find($id);
        if($forum){
            $success = new \Illuminate\Http\Response();
            $success->content(json_encode($forum));
            $success->setStatusCode(200);
            return $success; 
            }
            else{
            $failure = new \Illuminate\Http\Response();
            $failure->content(json_encode(['message'=>'Resource not found']));
            $failure->setStatusCode(404);
            }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $this->show($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(String $json, $id)
    {
        //
        $forum = Forum::find($id);
        if($forum){
            $forum->update($json);
            $forum->save();
            $success = new \Illuminate\Http\Response();
            $success->content(json_encode($forum));
            $success->setStatusCode(200);
            return $success; 
            }
            else{
            $failure = new \Illuminate\Http\Response();
            $failure->content(json_encode(['message'=>'Resource not found']));
            $failure->setStatusCode(404);
            }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = Forum::find($id);
        if($forum){
            $forum->destroy();
            $success = new \Illuminate\Http\Response();
            $success->content('');
            $success->setStatusCode(200);
            return $success; 
            }
            else{
            $failure = new \Illuminate\Http\Response();
            $failure->content(json_encode(['message'=>'Resource not found']));
            $failure->setStatusCode(404);
            }
    }
}
