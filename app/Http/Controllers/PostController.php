<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;

Use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    public function index(){
        $post = Post::getPost();

        return view('admin.post.index', ['posts' => $post]); 
    }

    public function createPostForm(){
        return view('admin.post.add-post-form'); 
    }

    public function createPost(PostRequest $request){
        if (Auth::check()) {
            $membershipApp = Post::create($request->validated());
            
            return redirect(route('post.index')); 
        }
    }

    public function editPost($postId){
        $postInfo = Post::findOrFail($postId);

        return view('admin.post.add-post-form', ['postInfo' => $postInfo]); 
    }

    public function updatePost(PostRequest $request, $postId){
        //find the post
        $postInfo = Post::findOrFail($postId); 

        //fill the Post Model Data from PostRequest
        $postInfo->fill($request->validated()); 
        
        //save the updated data
        $postInfo->save();

        return view('admin.post.add-post-form', ['postInfo' => $postInfo]); 
    }

    public function deletePost($postId){
        //find the post
        $postInfo = Post::find($postId); 

        //delete post
        $postInfo->delete();

        return redirect(route('post.index')); 
    }
}