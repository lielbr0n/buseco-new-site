<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class CustomRegisterUserController extends Controller
{
    /**
     * Display the registration view.
     */

    public function create()
    {   
        //custom register condition
        if (Auth::check()) {
            if(Auth::user()->status === 1 && Auth::user()->role === 'admin'){
                return view('admin.users.custom-register');
            }else{
                return redirect(route('dashboard'));
            }
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:25'], //custom field
            'status' => ['required', 'integer', 'max:1'] //custom field
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, //custom field
            'status' => $request->status
        ]);

        event(new Registered($user));

        return redirect(route('user.add'))->with('message', 'Added user successfully!');
    }
}
