<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;


// Routing basic topic.... 
Route::get('/', function () {
    return view('welcome');
}); 

// name parameter...
Route::get('/printnameevvv',function(){
    return view('name');
})->name('Findname');

Route::get('/detailsPagee',function(){
    return view('details');
});
Route::redirect('detailsPage','detailsPagee',301);




// ...redirect using...
// Route::get ('/testexam',function(){
//     return view('test');
// });
// Route::redirect('test','/testexam');


/*
Route::get('studentsPage',function(){
    return view('students');
});
Route::view('testPage','test');
*/






// this is only print on webbrowser direct print..

Route::get('/info/{id}',function($id){
    return "<h1>your id is :". $id . "</h1>";  
});

Route::get('/clear/only/{value}', function($value){
    return "<h1>your value is : $value</h1>"; 
});

// Route::get('/king',function(){
//     return "<h1>King is here</h1>";
// });

Route::get('/queen/{name?}',function(?string $name=null){
    if($name){
        return "<h1>Queen name is  : $name</h1>";
    }else{
        return "<h1>name is not found </h1>";
    }
});
Route::get('/queen/{name1?}/king/{name2?}',function(?string $name1=null,?string $name2=null){
    if($name1){
        return "<h1>Queen name is  : $name1  , king name is : $name2</h1>";
    }else{
        return "<h1>name is not found </h1>";
    }
});

Route::get('stnum/{num}/stname/{name}',function($num,$name){
    return "<h1>stnum is $num and name is $name</h1>";
})->where(
    'num','[0-9]+')
    ->where
    ('name','[a-zA-Z]+');
    

    
Route::get('name/{name?}',function($name = null){
    if($name){
        return "<h1>name is : $name</h1>";
    }else{
        return "<h1>name is not found</h1>";
    }
        
})->whereAlpha('name');



// ...route group making 


Route::prefix('page')->group(function(){
    Route::get('/about',function(){
        return "<h1>about page</h1>";
    });
    Route::get('/contact',function(){
        return "<h1>contact page</h1>";
    });
    Route::get('/post/service',function(){
        return "<h1>service page</h1>";
    });

    
});

// ....fallback...when route not created and user enter any other url so print... 

Route::fallback(function(){
    return "<h1>page  is not  found</h1>";
});





