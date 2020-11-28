<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LoanCrud;
use Illuminate\Http\Request;

class LoanCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loan = LoanCrud::all();
        return view('admin.loan-list', compact('loan', 'loan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loan-create');
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
            'loan_name' => 'required',
            'loan_amount' => 'required',
            'loan_percentage' => 'required',
            'loan_service' => 'required',
            'loan_details' => 'required',
        ]);


        $student = new LoanCrud([
            'loan_name' => $request->get('loan_name'),
            'loan_amount' => $request->get('loan_amount'),
            'loan_percentage' => $request->get('loan_percentage'),
            'loan_service' => $request->get('loan_service'),
            'loan_details' => $request->get('loan_details'),
        ]);



        $student->save();
        return redirect('/admin/loan')->with('success', 'Loan has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(LoanCrud $loan)
    {
        return view('admin.loan-view', compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanCrud $loan)
    {
        return view('admin.loan-edit', compact('loan'));
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
        $request->validate([
            'loan_name' => 'required',
            'loan_amount' => 'required',
            'loan_percentage' => 'required',
            'loan_service' => 'required',
            'loan_details' => 'required',
        ]);


        $loan = LoanCrud::find($id);
        $loan->loan_name = $request->get('loan_name');
        $loan->loan_amount = $request->get('loan_amount');
        $loan->loan_percentage = $request->get('loan_percentage');
        $loan->loan_service = $request->get('loan_service');
        $loan->loan_details = $request->get('loan_details');

        $loan->update();

        return redirect('/admin/loan')->with('success', 'Loan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanCrud $loan)
    {
        $loan->delete();
        return redirect('/admin/loan')->with('success', 'Loan deleted successfully');
    }
}
