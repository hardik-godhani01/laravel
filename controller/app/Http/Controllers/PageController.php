<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
//   public function showUser(){
//     return "<h1>welcome to controller lecture</h1>" ;
//   }
    public function showHome(){
        return view('welcome');
    }
    public function showUser(string $id){
        return view('user',compact('id'));
    }
    public function showBlog(){
        return view('blog');
    }
}
