<?php

namespace App\Http\Controllers\Admission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    public function index(){
    	return view('admission.admission');
    }
}
