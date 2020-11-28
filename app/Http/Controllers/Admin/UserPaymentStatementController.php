<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\UserApplication;

class UserPaymentStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $userStatement = UserApplication::all();
        //     ->select('payments.card_amount', 'payments.user_id', 'users.id as uid')
        //     ->join('users', 'payments.user_id', '=', 'users.id')
        //     // ->where('users.id', 'payments.user_id')
        //     ->get();
        // // dd($userStatement);
        // $total = $userStatement->sum('card_amount');
        // dd($total);

        $userStatement = DB::table('user_loan_applies')
            ->select('user_loan_applies.*', 'users.*')
            ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
            ->get();
        // dd($total);
        // $rePayment = $userLoanStatement->balance - $total;
        // dd($rePayment);
        return view('admin.statement.user-statement', compact('userStatement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uid)
    {
        $userStatement = DB::table('payments')
            ->select('payments.*', 'loan_application.*', 'user_loan_applies.*', 'users.*', 'payments.id as pid', 'payments.updated_at as pupdate', 'user_loan_applies.user_id as aid')
            ->join('users', 'payments.user_id', '=', 'users.id')
            ->join('loan_application', 'loan_application.user_id', '=', 'users.id')
            ->join('user_loan_applies', 'user_loan_applies.user_id', '=', 'users.id')
            ->where('users.id', $uid)
            ->get();
        // dd($userStatement);
        return view('admin.statement.user-all-statement', compact('userStatement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
