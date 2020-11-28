<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LoanApplication;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserLoanApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userApplication = LoanApplication::all();
        $userApplication = DB::table('loan_application')
            ->select('loan_application.*', 'users.*', 'loan_application.id as uid')
            ->join('users', 'loan_application.user_id', '=', 'users.id')
            ->first();
        return view('admin.loan-application', compact('userApplication'));
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
        $userApplication = DB::table('loan_application')
            ->select('loan_application.*', 'users.*', 'loan_application.id as uid')
            ->join('users', 'loan_application.user_id', '=', 'users.id')
            ->where('loan_application.id', $uid)
            ->first();
        return view('admin.loan-application-view', compact('userApplication'));
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
    public function update(Request $request, $uid)
    {


        $userApplication = LoanApplication::find($uid);
        $userApplication->status = 3;

        $userApplication->update();

        return redirect('/admin/userApplication')->with('success', 'Applicant Information Accept successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanApplication $userApplication)
    {
        $userApplication->delete();
        return redirect('/admin/userApplication')->with('success', 'Application deleted successfully');
    }
}
