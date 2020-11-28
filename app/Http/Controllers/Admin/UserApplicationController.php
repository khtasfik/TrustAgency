<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserApplication;
use App\Models\UserAcceptApplication;
use App\Models\UserLoanApply;
use Dotenv\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\LoanAccept;
use App\Models\User;

class UserApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicationCheck = DB::table('user_loan_applies')
            ->select('user_loan_applies.*', 'users.*', 'user_loan_applies.id as uid')
            ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
            ->get();
        return view('admin.application.loan-list', compact('applicationCheck'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $applicationCheck = DB::table('user_loan_applies')
        //     ->select('user_loan_applies.*', 'users.*', 'user_loan_applies.id as uid')
        //     ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
        //     ->get();
        // return view('admin.application.loan-list', compact('applicationCheck'));
        // return view('admin.application.loan-application-create', compact('applicationCheck'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UserApplication $UserApplication)
    {
        $request->validate([
            'loan_type' => 'required',
            'loan_amount' => 'required',
            'loan_for' => 'required',
        ]);

        $applicationCheck = new UserAcceptApplication([
            'user_id' => auth()->id(),
            'loan_type' => $request->get('loan_type'),
            'loan_for' => $request->get('loan_for'),
            'loan_amount' => $request->get('loan_amount'),
            'loan_application_id' => $UserApplication->id,
        ]);

        $applicationCheck->save();
        return redirect('admin.application.loan-application-show')->with('success', 'Loan has been added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uid)
    {
        $applicationCheck = DB::table('user_loan_applies')
            ->select('user_loan_applies.*', 'users.*', 'user_loan_applies.id as uid')
            ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
            ->where('user_loan_applies.id', $uid)
            ->first();
        // dd($applicationCheck);
        return view('admin.application.loan-application-show', compact('applicationCheck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uid)
    {
        $applicationCheck = DB::table('user_loan_applies')
            ->select('user_loan_applies.*', 'users.*', 'user_loan_applies.id as uid')
            ->join('users', 'user_loan_applies.user_id', '=', 'users.id')
            ->where('user_loan_applies.id', $uid)
            ->first();
        // dd($applicationCheck);
        return view('admin.application.loan-application-show', compact('applicationCheck'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uid)
    {
        $request->validate([
            'balance' => 'required',
        ]);
        $applicationCheck = UserLoanApply::find($uid);
        $applicationCheck->status = 'Accept';
        $applicationCheck->balance = $request->get('balance');
        $applicationCheck->update();

        $udata = User::find($applicationCheck->user_id);
        Mail::to($udata->email)->send(new LoanAccept($udata, $applicationCheck));
        // echo 'mail send';
        // dd($applicationCheck);
        return redirect('/admin/application')->with('success', 'Applicant Information Accept successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAcceptApplication $applicationCheck)
    {
        $applicationCheck->delete();
        return redirect('/admin/application')->with('success', 'Application deleted successfully');
    }
}
