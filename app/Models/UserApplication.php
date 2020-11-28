<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApplication extends Model
{
    use HasFactory;

    protected $table = 'user_applications';

    protected $fillable = [
        'user_id',
        'status',
        'loan_type',
        'loan_for',
        'loan_amount',
        'document',
    ];

    public function user()
    {
        return $this->hasMany('App/Models/User');
    }
}
