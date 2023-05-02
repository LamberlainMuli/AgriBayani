<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Borrower;
use App\Models\Lender;
use App\Models\Loan;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsFeedController extends Controller
{
    public function index()
    {
        $user = auth()->user();
    
        // Check if the user is a lender
        if (!$user->is_borrower) {
            $lender = Lender::where('account_id', $user->id)->first();
    
            if ($lender) {
                // Get borrower IDs associated with the lender
                $borrowerIds = Loan::where('lender_id', $lender->id)->pluck('borrower_id');
    
                // Get posts by those borrowers, sorted by date
                $posts = Post::whereIn('borrower_id', $borrowerIds)
                    ->orderBy('created_at', 'desc')
                    ->get();
            } else {
                $posts = collect([]);
            }
        } else {
            $posts = collect([]);
        }
    
        return view('news_feed', ['posts' => $posts]);
    }
}
