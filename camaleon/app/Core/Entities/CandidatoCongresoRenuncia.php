<?php

namespace App\Core\Entities;

use Illuminate\Foundation\Auth\CandidatoCongresoRenuncia as Authenticatable;

class CandidatoCongresoRenuncia extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
