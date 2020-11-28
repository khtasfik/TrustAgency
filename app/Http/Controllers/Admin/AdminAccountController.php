<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Withdraw;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminAccount = DB::table('user_loan_applies')
            ->select('user_loan_applies.balance')
            ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
            // ->where('users.id', auth()->user()->id)
            ->get();

        $totalBalance = $adminAccount->sum('balance');
        // dd($totalBalance);

        $userAccount = DB::table('payments')
            ->select('payments.card_amount', 'loan_application.*', 'user_loan_applies.*', 'users.*', 'payments.id as uid', 'payments.updated_at as pupdate', 'user_loan_applies.user_id as aid')
            ->join('users', 'payments.user_id', '=', 'users.id')
            ->join('loan_application', 'loan_application.user_id', '=', 'users.id')
            ->join('user_loan_applies', 'user_loan_applies.user_id', '=', 'users.id')
            ->get();
        $userTotal = $userAccount->sum('card_amount');
        // dd($userTotal);
        $userPay = $totalBalance - $userTotal;

        $withdraw = DB::table('withdraws')
            ->select('withdraws.admin_card_amount')
            ->join('users', 'withdraws.user_id', '=', 'users.id')
            ->first();

        $withdrawCheck = $withdraw->admin_card_amount;

        return view('admin.account.account-view', compact('userAccount', 'totalBalance', 'userTotal', 'userPay', 'withdrawCheck'));
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
        $request->validate([
            'admin_card_name' => 'required',
            'admin_card_amount' => 'required',
            'admin_card_number' => 'required',
            'admin_expairation' => 'required',
            'admin_cvv' => 'required',
        ]);


        $payment = new Withdraw([
            'user_id' => auth()->id(),
            'admin_card_name' => $request->get('admin_card_name'),
            'admin_card_number' => $request->get('admin_card_number'),
            'admin_card_amount' => $request->get('admin_card_amount'),
            'admin_expairation' => $request->get('admin_expairation'),
            'admin_cvv' => $request->get('admin_cvv'),
        ]);



        $payment->save();
        return redirect('/admin/account')->with('success', 'Payment has been Complete Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
