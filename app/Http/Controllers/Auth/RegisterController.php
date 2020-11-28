<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\LoanApplication;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if (Auth()->user()->role_id == 1) {
            return route('admin.dashboard');
        } elseif (Auth()->user()->role_id == 2) {
            return route('user.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
            'document' => 'required|file|mimes:pdf|max:6000',
            'address' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'city' => ['required', 'string'],
            'district' => ['required', 'string'],
            'nname' => ['required', 'string'],
            'nphone' => ['required', 'string'],
            'bname' => ['required', 'string'],
            'bnumber' => ['required', 'string'],
            'expairation' => ['required', 'string'],
            'cvv' => ['required', 'string'],
            'cwl' => ['required', 'string'],
            'bwl' => ['required', 'string'],
            'loan_type' => ['required', 'string'],
            'loan_amount' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     * @return \App\Models\LoanApplication
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'role_id' => 2,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'city' => $data['city'],
            'district' => $data['district'],
            'nomini_name' => $data['nname'],
            'nomini_phone' => $data['nphone'],

        ]);

        if (request()->hasFile('file')) {

            $file = request()->file('file')->getClientOriginalName();
            request()->file('file')->storeAs('public/file' . '/' . $file, '');
            $user->update(['file' => $file]);
        }
        if (request()->hasFile('document')) {
            $document = request()->file('document')->getClientOriginalName();
            request()->file('document')->storeAs('public/document' . '/' . $document, '');
            $user->update(['document' => $document]);
        }



        $loanApplication = LoanApplication::create([

            'user_id' => $user->id,
            'account_name' => $data['bname'],
            'account_number' => $data['bnumber'],
            'expairation' => $data['expairation'],
            'cvv' => $data['cvv'],
            'city_required' => $data['cwl'],
            'branch_requirwd' => $data['bwl'],
            'loan_type' => $data['loan_type'],
            'loan_amount' => $data['loan_amount'],
            'status' => 0,
        ]);

        return $user;
        return $loanApplication;
    }
}
