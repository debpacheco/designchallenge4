<?php // this is a wild card
Route::get('post/{post}', function($post){
    // new blade file called "notfound"
    // gets passed the uri segment though
    // the $myRequest variable
    return view("notfound", [
        'myRequest' => $post
        ]);
});