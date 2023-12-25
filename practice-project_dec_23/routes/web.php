<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/route', function () {
//     return "<h1>testing</h1>";
// });

# Route Parameter 
// Route::get('/user/{id}',function(string $id){
//     return "User id ".$id;

// });

# More than one Route Parameter 

// Route::get('/post/{postId}/postComment/{PostCommentId}',function(string $postId, string $postCommentId){
//     if($postId){
//         return "post id ".$postId;
//     }
//     elseif ($postCommentId) {
//         return "post Comment Id".$postCommentId;
//     }
//     else{
//         echo "not found";
//     }
// });


#More than one Route Parameter and with optional option

// Route::get('/post/{postId}/postComment/{PostCommentId?}',function(string $postId, string $postCommentId=null){
//     if($postId){
//         return "post id ".$postId;
//     }
//     elseif ($postCommentId) {
//         return "post Comment Id".$postCommentId;
//     }
//     else{
//         echo "not found";
//     }
// });

# Route Parameter with Regular Exp
// Route::get('/post/{postId}/postComment/{PostCommentId}',function(string $postId, string $postCommentId){
//     if($postId){
//         return "post id ".$postId;
//     }
//     elseif ($postCommentId) {
//         return "post Comment Id".$postCommentId;
//     }
//     else{
//         echo "not found";
//     }
// })->where(['postId'=>'[0-9]+','postCommentId'=>'[0-9]+']);


#get Url through route in 
Route::get('user/',array('as'=>'url',function(){
    $url = route('url');
    $url1 = $_SERVER['REQUEST_URI'];
    echo $url1;
    return "this is url = ".$url;
}));
