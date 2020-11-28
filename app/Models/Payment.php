<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'user_id',
        'card_name',
        'card_number',
        'card_amount',
        'expairation',
        'cvv',

    ];

    public function user()
    {
        return $this->hasMany('App/Models/User');
    }
}
