<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'file',
        'document',
        'address',
        'gender',
        'phone',
        'city',
        'district',
        'nomini_name',
        'nomini_phone',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function loanApplication()
    {
        return $this->belongsTo('App\Models\LoanApplication');
    }
    public function UserLoanApply()
    {
        return $this->belongsTo('App\Models\UserLoanApply');
    }
    public function userAcceptApplication()
    {
        return $this->belongsTo('App\Models\UserAcceptApplication');
    }
    public function withdraw()
    {
        return $this->belongsTo('App\Models\Withdraw');
    }
}
