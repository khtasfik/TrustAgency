<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAcceptApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'loan_application_id',
        'loan_type',
        'loan_for',
        'loan_amount',
    ];

    public function user()
    {
        return $this->hasMany('App/Models/User');
    }
    public function loanApplication()
    {
        return $this->hasMany('App\Models\LoanApplication', 'loan_application_id');
    }
}
