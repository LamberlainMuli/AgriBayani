<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrower;
use App\Models\Lender;
use App\Models\Loan;

class DashboardController extends Controller
{
    public function index()
    {
        $borrowerId = Borrower::where('account_id', auth()->user()->id)->first()->id;

        $lenders = Lender::select('lenders.*')
            ->join('loans', 'loans.lender_id', '=', 'lenders.id')
            ->where('loans.borrower_id', $borrowerId)
            ->selectRaw('sum(loans.amount_loaned) as total_donated')
            ->groupBy('lenders.id')
            ->get();

        $recentLoans = Loan::with('lender')
            ->where('borrower_id', $borrowerId)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('dashboard', compact('lenders', 'recentLoans'));
    }
}