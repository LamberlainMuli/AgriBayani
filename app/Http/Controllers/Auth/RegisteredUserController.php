<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Account;
use App\Models\Borrower;
use App\Models\Lender;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    private function createDefaultProfilePicture(string $firstName, string $lastName): string
    {
        $initials = strtoupper(substr($firstName, 0, 1) . substr($lastName, 0, 1));
        $path = 'profile_pictures/' . uniqid() . '.png';

        $img = Image::canvas(100, 100, '#ffffff');
        $img->text($initials, 50, 50, function ($font) {
            $font->file(public_path('fonts/Roboto-Bold.ttf')); // Replace with your desired font file
            $font->size(48);
            $font->color('#000000');
            $font->align('center');
            $font->valign('center');
        });

        $img->save(public_path('storage/' . $path));

        return $path;
    }

    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'phone_number' => ['required', 'string', 'max:15'], // Add phone number validation
            'location' => ['required', 'string', 'max:255'], // Add location validation
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'is_borrower' => ['sometimes', 'boolean'],
        ]);
    
        $pictureUrl = $this->createDefaultProfilePicture($request->first_name, $request->last_name);

        $user = Account::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'password' => Hash::make($request->password),
            'picture_url' => $pictureUrl, // Add the generated picture URL
            'is_borrower' => $request->is_borrower,
        ]);
    
        event(new Registered($user));
        
        if ($user->is_borrower) {
            Borrower::create([
                'description' => '',
                'goal_amount' => 0,
                'amount_received' => 0,
                'account_id' => $user->id,
            ]);
        } else {
            Lender::create([
                'amount_lended' => 0,
                'account_id' => $user->id,
            ]);
        }

        Auth::login($user);
        if ($user->is_borrower) {
            return redirect(route('posts'));
        }
        else{
            return redirect(route('newsfeed'));
        }
    }
}
