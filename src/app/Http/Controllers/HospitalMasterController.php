<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HospitalMaster;
use Illuminate\Support\Facades\Auth;

class HospitalMasterController extends Controller
{
    // 初期表示
    public function index()
    {
        return view('hospitalregistration');
    }

    // 病院情報の登録
    // BUG: idのエラー
    public function add()
    {
        HospitalMaster::create([
            'user_id' => Auth::id(),
            'hospital_name' => '病院名',
            'address' => '住所',
            'tel' => '電話番号',


        ]);
    }
}
