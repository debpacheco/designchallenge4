<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view("welcome");
});

Route::get('/debbie', function(){
    $name = "Debbie";
    $title = "Lady Derp";
    $color = "purple";
    $image = "duck.png";

    return view ("default", [
        'name'=> $name, 
        'title' => $title,
        'color' => $color,
        'image' => $image 
        ]);
});

Route::get('/jason', function(){
    $name = "Jason";
    $title = "Happy Derp";
    $color = "Green";
    $image = "derp.jpg";

    return view ("default", [
        'name'=> $name, 
        'title' => $title,
        'color' => $color,
        'image' => $image 
        ]);
});

Route::get('/gator', function(){
    $name = "Gator";
    $title = "My Love";
    $color = "Orange";
    $image = "roaring-bear.jpg";

    return view ("default", [
        'name' => $name,
        'title' => $title,
        'color' => $color,
        'image' => $image
    ]);
});

// this is a wild card
Route::get('/{post}', function($post){
    // new blade file called "notfound"
    // gets passed the uri segment though
    // the $myRequest variable
    return view("notfound", [
        'myRequest' => $post
        ]);
});
Route::get('post/post1', function(){
    $name = "Miles";
    $title = "Hello Miles";
    $image = "two.jpg";
    return view("posts", [
        'name' => $name,
        'title' => $title,
        'image' => $image
    ]);
});
Route::get('post/post2', function(){
    $name = "Jason";
    $title = "Hello Jason";
    $image = "one.jpg";
    return view("posts", [
        'name' => $name,
        'title' => $title,
        'image' => $image
    ]);
});
// this is a wild card
Route::get('post/{post}', function($post){
    // new blade file called "notfound"
    // gets passed the uri segment though
    // the $myRequest variable
    return view("notfound", [
        'myRequest' => $post
        ]);
});
