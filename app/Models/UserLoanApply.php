<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoanApply extends Model
{
    use HasFactory;

    protected $table = 'user_loan_applies';

    protected $fillable = [
        'user_id',
        'loan_type',
        'loan_for',
        'loan_amount',
        'status',
        'document',
    ];

    public function user()
    {
        return $this->hasMany('App/Models/User');
    }
}
