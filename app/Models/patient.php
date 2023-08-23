<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'num_afi',
        'address',
        'status'
    ];

    public function Appoint(){

        return $this->hasMany(Appoint::class);
    }
    
}
