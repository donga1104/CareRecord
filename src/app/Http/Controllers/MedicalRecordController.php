<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    // 初期表示
    public function index()
    {
        return view('medicalrecords');
    }
}
