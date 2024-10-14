<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

use App\Models\User;


class UserController extends Controller
{
    public function index(){
        if (Auth::check()) {
            if(Auth::user()->status === 1 && Auth::user()->role === 'admin'){
                $users = User::whereNot('id', Auth::user()->id)->paginate(12);

                if(request()->search){
                    $q = request()->input('search');
                    
                    /** Using laravel scout custom search */
                    // $membersInfo = MembershipApplication::search($q)
                    // ->paginate(10)
                    // ->appends(['search' => $q]);
        
                    /** For now search uses eloquent and raw query */
                    $searchString = "%" . str_replace(" ", "%", $q) . "%"; //replace space with % wildcard.
                    $users = User::query()
                    ->where(DB::raw('concat(name, " ", email)'), 'LIKE', $searchString)
                    ->paginate(10)
                    ->appends(['search' => $q]); //to append in url, for pagination
                }

                return view('admin.users.index', ['users' => $users]);
            }else{
                return redirect(route('dashboard'));
            }
        }    
    }
}