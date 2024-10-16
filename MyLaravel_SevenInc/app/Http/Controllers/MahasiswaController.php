<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $users = Mahasiswa::orderBy('id', 'desc')->get();
        return view('kaprodi.dashboard');
    }
}
