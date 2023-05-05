<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
    class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        // dd($request->all());

        // $request->validate([
        //     'email' => [
        //         'nullable', 
        //         'email', 
        //         'max:255', 
        //         Rule::unique('users')->ignore(Auth::id()),
        //     ],
        //     'first_name' => ['nullable', 'string', 'max:255'],
        //     'last_name' => ['nullable', 'string', 'max:255'],
        //     'phone_number' => ['nullable', 'regex:/^(\+\d{1,3}[- ]?)?(\d{10})$/'], // Updated this line
        //     'location' => ['nullable', 'string', 'max:255'],
        //     'goal_amount' => ['nullable', 'integer', 'min:0'],
        //     'description' => ['nullable', 'string', 'max:65535'],
        // ]);
        
        $rules = [
            'email' => [
                'nullable', 
                'email', 
                'max:255', 
                Rule::unique('users')->ignore(Auth::id()),
            ],
            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'phone_number' => ['nullable', 'string','max:255']  ,
            'location' => ['nullable', 'string', 'max:255'],
            'goal_amount' => ['nullable', 'integer', 'min:0'],
            'description' => ['nullable', 'string', 'max:65535'],
        ];
        
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            dd($validator->errors());
        }


        $user = Auth::user();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->location = $request->input('location');
        // Update any other fields as necessary
        $user->save();
    
        // If the user is a borrower, update their borrower information as well
        if ($user->is_borrower) {
            $borrower = $user->borrower;
            $borrower->description = $request->input('description');
            $borrower->goal_amount = $request->input('goal_amount');
            $borrower->save();
        }

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
