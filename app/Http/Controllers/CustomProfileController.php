<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\CustomProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\User;

class CustomProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit($userId): View
    {   
        $userprofile = User::findOrFail($userId);

        return view('admin/users.custom-profile', [
            'user' => $userprofile,
        ]);
    }

    /**
     * Update the user's profile information.
    */

    public function update(CustomProfileUpdateRequest $request, $userId)
    {   
        $userProfile = User::findOrFail($userId);

        $userProfile->fill($request->validated()); // Fill User Model with validated data - $request->validated().

        if($userProfile->isDirty('email')){ // isDirty() - check if the email is modified or not.
            $userProfile->email_verified_at = null;
        }

        $userProfile->save(); // Then save!

        return redirect(route('user.profile.edit', ['userId' => $userId]))->with('message',  'Updated Successfully!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, $userId)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $userProfile = User::findOrFail($userId);
        $userProfile->delete();
    
        return redirect(route('user.index'))->with('message', 'Deleted the user successfully.');
    }
}
