<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\MembershipApplication;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        if (Auth::check()) {
            if(Auth::user()->status === 1 && Auth::user()->role === 'admin'){
                $users = User::whereNot('id', Auth::user()->id)->paginate(12);

                return view('admin.users.index', ['users' => $users]);
            }else{
                return redirect(route('dashboard'));
            }
        }    
    }
}