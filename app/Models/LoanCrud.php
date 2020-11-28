<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanCrud extends Model
{
    use HasFactory;

    protected $table = 'loan';

    protected $fillable = [
        'loan_name',
        'loan_amount',
        'loan_percentage',
        'loan_service',
        'loan_details',
    ];
}
