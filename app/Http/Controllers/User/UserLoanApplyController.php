<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserLoanApply;

class UserLoanApplyController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf|max:6000',
            'loan_type' => ['required', 'string'],
            'loan_amount' => ['required', 'string'],
        ]);
        if (request()->hasFile('document')) {
            $document = request()->file('document')->getClientOriginalName();
            request()->file('document')->storeAs('public/loan-apply' . '/' . $document, '');
        }
        $userLoanApply = new UserLoanApply([
            'user_id' => auth()->id(),
            'loan_type' => $request->get('loan_type'),
            'loan_for' => $request->get('loan_for'),
            'loan_amount' => $request->get('loan_amount'),
            'document' => $document,
        ]);

        $userLoanApply->save();
        return redirect('user/apply')->with('success', 'Loan Apply has been Sent Successfully');
    }
}
