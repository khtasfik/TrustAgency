<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // public function sanction($id)
    // {
    //     $applicationCheck = DB::table('user_loan_applies')
    //         ->select('user_loan_applies.*', 'users.*', 'user_loan_applies.id as uid')
    //         ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
    //         ->get();
    //     return view('admin.application.loan-list', compact('applicationCheck'));
    //     return view('admin.application.loan-application-create');
    // }
}
