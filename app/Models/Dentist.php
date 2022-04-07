<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    use HasFactory;

    public function patients(){
        return $this->belongsToMany(Patient::class, 'dentist_patient','dentist_id','patient_id');
    }
}
