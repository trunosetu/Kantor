<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pegawai;

class PegawaiController extends Controller
{

    public function index()
    {
        return view('pegawai');
    }
    
    

}
