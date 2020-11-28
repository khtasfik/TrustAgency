<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanApplication;

class LoanApplicationController extends Controller
{
    public function index()
    {
        return view('admin.loan-application');
    }
}
