<?php

use App\Models\Comments;
use App\Models\Pages;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/comment', function(){

    // getting comments for a sample page...
    $page = Pages::find(2);

    foreach($page->comment as $comment)
    {
        // working with comment here...
        return $comment;
    }

});


Route::get('/comment/page', function() {

    $page = Pages::find(1);

// getting the model...
    var_dump($page->commentable);
//    foreach($page->comment as $comment)
//    {
//        // working with comment here...
//        return $comment;
//    }

    });


Route::get('/comment/pages', function() {

    $comment = Comments::find(2);

// getting the model...
    var_dump($comment->commentable->body);

});

Route::get('/comment/posts', function() {

    $comment = Comments::find(1);

// getting the model...
    var_dump($comment->commentable->content);

});

Route::get('/post/comment', function() {

    $post = Posts::find(1);

// getting the model...
    var_dump($post->commentable);

});
