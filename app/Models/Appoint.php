<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointDate',
        'appointReason',
        'doctorType',
        'patient_id'
    ];

    public function patient(){

        return $this->belongsTo('App\Models\Patient');
    }
}
