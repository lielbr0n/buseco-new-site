<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

use App\Models\Post;

Use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    public function index(){
        $post = Post::getPost();

        if(request()->search){
            $q = request()->input('search');
            
            /** Using laravel scout custom search */
            // $membersInfo = MembershipApplication::search($q)
            // ->paginate(10)
            // ->appends(['search' => $q]);

            /** For now search uses eloquent and raw query */
            $searchString = "%" . str_replace(" ", "%", $q) . "%"; //replace space with % wildcard.
            $post = Post::query()
            ->where(DB::raw('concat(post_title)'), 'LIKE', $searchString)
            ->where('post_type', 'post')
            ->paginate(10)
            ->appends(['search' => $q]); //to append in url, for pagination
        }

        return view('admin.post.index', ['posts' => $post]); 
    }

    public function createPostForm(){
        return view('admin.post.add-post-form'); 
    }

    public function createPost(PostRequest $request){
        if (Auth::check()) {
            $post= Post::create($request->validated());
            
            if($post){
                return redirect(route('post.edit', ['postId' => $post->post_id ]))->with('postMessage', 'Saved Successfully!'); 
            }
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

        return back()->with('postMessage', 'Updated Successfully!');
    }

    public function deletePost($postId){
        //find the post
        $postInfo = Post::find($postId); 

        //delete post
        $postInfo->delete();

        return redirect(route('post.index'))->with('postMessage', 'Deleted Successfully!'); 
    }
}