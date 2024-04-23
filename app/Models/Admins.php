<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Authenticatable
{
    use HasFactory;

    protected $table = "Admins";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        'name',
        'telephone',

        'password',
        'email',

    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function property()
    {
        return $this->hasMany(property::class);
    }
}
