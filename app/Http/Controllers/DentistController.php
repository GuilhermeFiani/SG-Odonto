<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentist;

class DentistController extends Controller
{
    public function index(){
        return view('dentist.dashboard');
    }
    public function show() {
        return Dentist::all();
    }
}
