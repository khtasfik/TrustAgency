<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanApplication;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userProfile = LoanApplication::all();
        // $userProfile = DB::table('loan_application')
        //     ->select('loan_application.*', 'users.*', 'loan_application.id as uid')
        //     ->join('users', 'loan_application.user_id', '=', 'users.id')
        //     ->get();
        return view('user.profile', compact('userProfile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.profile-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uid)
    {
        $userProfile = DB::table('loan_application')
            ->select('loan_application.*', 'users.*', 'loan_application.id as uid')
            ->join('users', 'loan_application.user_id', '=', 'users.id')
            ->where('loan_application.id', $uid)
            ->first();
        return view('user.profile-view', compact('userProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {
        return view('user.profile-edit', compact('userProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uid, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->file = $request->get('file');
        $user->document = $request->get('document');
        $user->address = $request->get('address');
        $user->gender = $request->get('gender');
        $user->phone = $request->get('phone');
        $user->city = $request->get('city');
        $user->district = $request->get('district');
        $user->nomini_name = $request->get('nname');
        $user->nomini_phone = $request->get('nphone');
        $user->update();

        if ($files = $request->file('file')) {
            $destinationPath = 'public/file/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['file'] = "$profileImage";
        }

        $loanApplication = LoanApplication::find($uid);
        $loanApplication->account_name = $request->get('bname');
        $loanApplication->account_number = $request->get('bnumber');
        $loanApplication->expairation = $request->get('expairation');
        $loanApplication->cvv = $request->get('cvv');
        $loanApplication->city_required = $request->get('cwl');
        $loanApplication->branch_requirwd = $request->get('bwl');
        $loanApplication->loan_type = $request->get('loan_type');
        $loanApplication->loan_amount = $request->get('loan_amount');


        $loanApplication->update();

        return redirect('/user/profile')->with('success', 'Your Profile is updated successfully');
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
