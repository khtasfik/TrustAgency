<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $table = 'withdraws';

    protected $fillable = [
        'user_id',
        'admin_card_name',
        'admin_card_number',
        'admin_card_amount',
        'admin_expairation',
        'admin_cvv',

    ];

    public function user()
    {
        return $this->hasMany('App/Models/User');
    }
}
