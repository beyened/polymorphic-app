<?php

use App\Models\Album;
use App\Models\Comments;
use App\Models\Pages;
use App\Models\Posts;
use App\Models\Song;
use App\Models\Upvote;
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

Route::get('/comment', function (){
    $comment = Comments::find(1);

    var_dump($comment);
});

Route::get('/pages', function (){
    $pages = Pages::find(1);

    var_dump($pages);
});

Route::get('/find/Comment', function(){

    // getting a comment...
    $comments = Comments::find(1);

    return $comments->commentable;
});

Route::get('/pages/comment', function() {

    $page = Pages::find(2);

// getting the model...
   // var_dump($page->comment);
    foreach($page->comment as $comment)
    {
        // working with comment here...
        return $comment;
    }

    });

Route::get('/post/comment', function (){

    $post = Posts::find(1);

    foreach ($post->post as $post){
        return $post;
    }

});

Route::get('add', function () {
    $album = Album::create(['name' => 'More Life']);
    $song = Song::create(['title' => 'Free smoke', 'album_id' => 1]);
    $upvote1 = new Upvote;
    $upvote2 = new Upvote;
    $upvote3 = new Upvote;
    $album->upvotes()->save($upvote1);
    $song->upvotes()->save($upvote2);
    $album->upvotes()->save($upvote3);
});

Route::get('/album/upvote', function (){
    $album = Album::find(1);
    $upvotes = $album->upvotes;
    return $upvotes;
    $upvotescount = $album->upvotes->count();
    return $upvotescount;
});

Route::get('/song/upvote', function (){
    $song = Song::find(1);
    $upvotes = $song->upvotes;
    return $upvotes;
    $upvotescount = $song->upvotes->count();
});

Route::get('/upvote', function (){
    $upvote = Upvote::find(2);
    $model = $upvote->upvoteable;
    return $model;
});
