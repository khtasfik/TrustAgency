<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentStatementController extends Controller
{
    public function index()
    {
        $loanStatement = DB::table('user_loan_applies')
            ->select('user_loan_applies.balance')
            ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
            // ->where('users.id', auth()->user()->id)
            ->first();

        $loanBalance = $loanStatement->balance;
        // dd($loanBalance);

        $loanStatement = DB::table('payments')
            ->select('payments.card_amount', 'loan_application.*', 'user_loan_applies.*', 'users.*', 'payments.id as uid', 'payments.updated_at as pupdate', 'user_loan_applies.user_id as aid')
            ->join('users', 'payments.user_id', '=', 'users.id')
            ->join('loan_application', 'loan_application.user_id', '=', 'users.id')
            ->join('user_loan_applies', 'user_loan_applies.user_id', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->get();
        // dd($loanAccept);
        $total = $loanStatement->sum('card_amount');
        // dd($total);
        // $userPay = $loanBalance - $total;
        
        $paypalStatement = DB::table('payment')
            ->select('payment.*', 'users.*', 'payment.id as uid', 'payment.updated_at as pupdate')
            ->join('users', 'payment.user_id', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->get();
        // dd($loanAccept);
        $paypalTotal = $paypalStatement->sum('amount');
        $paypalBd = $paypalTotal * 84.79;
        $userPay = $loanBalance - $total -$paypalBd;

        return view('user.payment.payment-statement', compact('loanStatement','paypalStatement', 'total', 'loanBalance', 'userPay', 'paypalTotal', 'paypalBd'));
    }
}
