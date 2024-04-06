<?php

namespace App\Models;

class User extends BaseModel
{
    protected $fillable = [
        'last_name',
        'first_name',
        'email',
    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
