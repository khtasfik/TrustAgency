<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WithdrawStatement extends Controller
{
    public function index()
    {
        $withdrawStatement = DB::table('withdraws')
            ->select('withdraws.*')
            ->join('users', 'withdraws.user_id', '=', 'users.id')
            ->get();

        return view('admin.statement.admin-statement', compact('withdrawStatement'));
    }
}
