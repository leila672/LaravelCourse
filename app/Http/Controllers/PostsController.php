<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public $posts = [["id"=>1, "title"=>"post 1","desc"=>"descrption"],
    ["id"=>2, "title"=>"post 2","desc"=>"descrption 2"],
    ["id"=>3, "title"=>"post 3","desc"=>"descrption 3"],
    ["id"=>4, "title"=>"post 4","desc"=>"descrption 4"]
];
    
    public function index()
    {
        return view("posts.index",["posts"=>$this->posts]);
    }

   
    public function create()
    {
        return view("posts.create");
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
            foreach ($this->posts as $post)
            {
                if ($post["id"]==$id){
                    return view("posts.view",["post"=>$post]);
                    
                }
            }
         return NULL ; 
        

    }

    
    public function edit($id)
    {
        foreach ($this->posts as $post)
        {
            if ($post["id"]==$id){
                return view("posts.edit",["post"=>$post]);
                
            }
        }
     return NULL ; 
}

   

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
