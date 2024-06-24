<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;
use App\Models\Page;


class HomePageController extends Controller
{

    public function index(){
        $getLatestPostNewsAndJobOpp = Post::getLatestPostNewsAndJobOpp(3); //put 3 if display 3 post. 4 if 4 post and so on.
        $latestPublicAdvisories = Post::getPostAdvisories(4); //get post with public_advisory catergories

        return view('home', ['getLatestPostNewsAndJobOpp' => $getLatestPostNewsAndJobOpp, 'latestPublicAdvisories' => $latestPublicAdvisories]); 
    }

    public function blogSinglePage($postSlug){
        $post = Post::where('post_slug', $postSlug)
        ->where('post_type', 'post')
        ->firstOrFail();

        $latestPosts = Post::getLatestPost(4);

        return view('blog.single-blog-post', ['post' => $post, 'latestPosts' => $latestPosts]); 
    }

    public function blogListPage(){
        $blogList = Post::getListPost();
        $latestPosts = Post::getLatestPost(4);

        return view('blog.list-blog-post', ['blogList' => $blogList, 'latestPosts' => $latestPosts]);
    }

    public function viewPage($pageName){
        $latestPosts = Post::getLatestPost(4);

        if($pageName){
            $pageInfo = Page::where('post_slug', $pageName)->firstOrFail();
        
            return  view('pages.template-view-page', ['pageInfo' => $pageInfo, 'latestPosts' => $latestPosts]);
        }
    }

    public function contactUs(){
        return  view('contact-us.index');
    }
}