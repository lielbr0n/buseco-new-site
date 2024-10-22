<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

use App\Models\Post;
use App\Models\UserPostLogs;

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
                UserPostLogs::createPostLogs($post->post_id, $post->post_title, $request->method()); //insert logs

                return redirect(route('post.edit', ['postId' => $post->post_id ]))->with('postMessage', 'Saved Successfully!'); 
            }
        }
    }

    public function editPost($postId){
        $postInfo = Post::findOrFail($postId);
        $postLogsInfo = UserPostLogs::getModifiedPostLogsByPostId($postId); 

        return view('admin.post.add-post-form', ['postInfo' => $postInfo, 'postLogsInfo' => $postLogsInfo]); 
    }

    public function updatePost(PostRequest $request, $postId){
        //find the post
        $postInfo = Post::findOrFail($postId); 
    
        //Compare the model values and request values(from input fields) 
        $postInfo->post_title = $request->validated()['post_title'];
        $postInfo->post_slug = $request->validated()['post_slug'];
        $postInfo->post_content = $request->validated()['post_content'];
        $postInfo->post_category = $request->validated()['post_category'];
        $postInfo->post_excerpt = $request->validated()['post_excerpt'];
        $postInfo->post_status = $request->validated()['post_status'];
        $postInfo->post_option = $request->validated()['post_option'];
        $postInfo->post_feature_image =  $request->validated()['post_feature_image'];

        if(!$postInfo->isDirty()){
            return back()->with('postMessage', 'No Changes Were Made.');
        }

        //fill the Post Model Data from PostRequest
        $postInfo->fill($request->validated()); 
        
        //save the updated data
        $postUpdate = $postInfo->save();

        //remove this fields on getChanges helper of laravel
        $modifiedFields = array_diff_key($postInfo->getChanges(), array_flip((array) ['updated_at', 'post_author_id', 'post_author_name'])); 

        if($postUpdate){
            UserPostLogs::createPostLogs($postId, $postInfo->post_title, $request->method(), $modifiedFields); //insert logs
        }

        return back()->with('postMessage', 'Updated Successfully!');
    }

    public function deletePost($postId){
        //find the post
        $postInfo = Post::find($postId); 

        //delete post
        $deletedPost = $postInfo->delete();

        if($deletedPost){
            UserPostLogs::createPostLogs($postId, $postInfo->post_title, 'DELETE'); //insert logs
        }

        return redirect(route('post.index'))->with('postMessage', 'Deleted Successfully!'); 
    }

    public function postRevisions($postId){
        $postLogsInfo = UserPostLogs::getModifiedPostLogsByPostId($postId); 
        $postTitle = Post::getPostTitleById($postId);

        return view('admin.post.revisions-post', ['postLogsInfo' => $postLogsInfo, 'postTitle' => $postTitle]); 
    }

    public function postRevisionsModifiedFields($postLogId){
        $postLogsInfo = UserPostLogs::findOrFail($postLogId); 

        return view('admin.post.revisions-post-modify-fields', ['postLogsInfo' => $postLogsInfo]); 
    }
}