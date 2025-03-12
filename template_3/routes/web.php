<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController ;

//controller..


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PageController::class ,'showHome'])->name('home');

Route::get('/user/{id}',[PageController::class ,'showUser'])->name('users');
/*
Route::get('/about',function(){
    return view('/about');
});

Route::get('/post',function(){
    return view('/post');
});  

Route::get('/test',function(){
    return view('test');
});
 
function getusers(){
    return [
            1=>["name"=>"hardik","age"=>20,"city"=>"jamnagar"],
            2=>["name"=>"pranav","age"=>23,"city"=>"porbander"]
        ];
}
Route::get('/user',function(){
    // $name = "Yahoo baba";
    
    $names = getUsers();
    return view('user',
    ['user'=>$names , 'city'=>'delhi']);  

    // return view('user')->with('user',$name)->with('city','delhi');

    // return view('user')
    // ->withuser($name)
    // ->withcity('delhi');
});

Route::get('user/{id}',function($id){
    $users = getusers();
    $user = $users[$id];
    return "<h1>User :$id</h1>";
})->name('view.user',$id); 

*/

function getUsers(){
    return[
            1=>['name'=>'amitabh' , "phone"=>"9123456889","city"=>"goa"],
            2=>['name'=>'rahul' , "phone"=>"9100456889","city"=>"delhi"],
            3=>['name'=>'virat' , "phone"=>"9123000889","city"=>"mumbai"],
        ];
}

Route::get('/users',function(){
    // $name = "yahoo baba";
    $name = getUsers();
    return view('users',['user'=>$name,"city"=>"cc"]);

    // second method..
    // return view('user')->with('user',$name)->with('city','delhi');

    // return view('user')->withuser($name)->withcity('delhi');
}); 


Route::get('user/{id}',function($id){
    $users = getUsers(); 
    abort_if(!isset($user[$id]),404);
    $user = $users[$id];
    return view('userdata',['id'=>$user]);
})->name('view.user');



  


