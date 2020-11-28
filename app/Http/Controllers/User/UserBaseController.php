<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserBaseController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function profile()
    {
        // $userApplication = DB::table('loan_application')
        //     ->select('loan_application.*')
        //     ->join('users', 'loan_application.user_id', '=', 'users.id')
        //     ->where('loan_application.id', $uid)
        //     ->first();
        // return view('user.profile', compact('userApplication'));
        return view('user.profile');
    }
    public function loanApply()
    {
        return view('user.loan-apply');
    }
}
