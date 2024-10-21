<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

use App\Models\Post;
use App\Models\UserPostLogs;


class UserPostLogsController extends Controller
{
    public function index(){
        $postLogs = UserPostLogs::getPostLogs();

        // if(request()->search){
        //     $q = request()->input('search');
            
        //     /** Using laravel scout custom search */
        //     // $membersInfo = MembershipApplication::search($q)
        //     // ->paginate(10)
        //     // ->appends(['search' => $q]);

        //     /** For now search uses eloquent and raw query */
        //     $searchString = "%" . str_replace(" ", "%", $q) . "%"; //replace space with % wildcard.
        //     $post = Post::query()
        //     ->where(DB::raw('concat(post_title)'), 'LIKE', $searchString)
        //     ->where('post_type', 'post')
        //     ->paginate(10)
        //     ->appends(['search' => $q]); //to append in url, for pagination
        // }

        return view('admin.post-logs.index', ['postLogs' => $postLogs]); 
    }
}