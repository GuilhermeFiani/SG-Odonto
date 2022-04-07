<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function dentists() {
        return $this->belongsToMany(Dentist::class,'dentist_patient','patient_id','dentist_id');
    }
}

