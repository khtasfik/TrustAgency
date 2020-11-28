<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    protected $table = 'loan_application';

    protected $fillable = [
        'user_id',
        'status',
        'loan_type',
        'loan_amount',
        'account_name',
        'account_number',
        'expairation',
        'cvv',
        'city_required',
        'branch_requirwd',
        'loan_type',
        'loan_amount',
    ];

    protected $primaryKey = 'id';


    public function user()
    {
        return $this->hasMany('App/Models/User', 'loan_application_id');
    }
}
