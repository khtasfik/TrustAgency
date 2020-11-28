<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcceptController extends Controller
{
    public function acceptLoan()
    {

        $loanAccept = DB::table('user_loan_applies')
            ->select('user_loan_applies.*', 'loan_application.*', 'users.*', 'user_loan_applies.id as uid')
            ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
            ->join('loan_application', 'loan_application.user_id', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->first();
        // dd($loanAccept);
        return view('user.loan-accept', compact('loanAccept'));
    }
}
