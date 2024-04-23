<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Authenticatable
{
    use HasFactory;

    protected $table = "home_owners";
    protected $primaryKey = "National_id";
    protected $fillable = [
        "National_id",
        'surname',
        'other_names',
        'password',
        'email',
        'phone',
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
