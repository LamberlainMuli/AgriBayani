<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use App\Models\Lender;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function create(Request $request, $borrower_id)
    {
        $borrower = Borrower::findOrFail($borrower_id);

        return view('loans\create', [
            'borrower' => $borrower,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'borrower_id' => 'required|exists:borrowers,id',
            'lender_id' => 'required|exists:lenders,id',
            'amount_loaned' => 'required|numeric',
        ]);

        $loan = new Loan([
            'borrower_id' => $request->input('borrower_id'),
            'lender_id' => $request->input('lender_id'),
            'amount_loaned' => $request->input('amount_loaned'),
            'amount_paid' => 0,
            'is_fully_paid' => false,
            'interest' => 0,
            'amount_to_pay_total' => $request->input('amount_loaned'),
        ]);

        // Update the Borrower's amount_received
        $borrower = Borrower::find($request->input('borrower_id'));
        $borrower->amount_received += $request->input('amount_loaned');
        $borrower->save();
        
        $lender = Lender::find($request->input('lender_id'));
        $lender->amount_lended += $request->input('amount_loaned');
        $lender->save();

        $loan->save();

        return redirect()->route('newsfeed')->with('success', 'Loan created successfully');
    }
}