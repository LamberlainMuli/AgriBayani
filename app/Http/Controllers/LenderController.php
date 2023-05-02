<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Borrower;
class LenderController extends Controller
{
    public function explore()
    {
        $lender = auth()->user()->lender;
    
        $loanedBorrowerIds = $lender->loans->pluck('borrower_id')->unique();
    
        $borrowers = Borrower::whereNotIn('id', $loanedBorrowerIds)
            ->inRandomOrder()
            ->with('account')
            ->get();
    
        return view('explore', compact('borrowers'));
    }
}
