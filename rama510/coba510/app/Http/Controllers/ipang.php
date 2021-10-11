<?php

namespace App\Http\Controllers;

use App\Models\ModelCoba;
use Illuminate\Http\Request;

class ipang extends Controller
{
    public function rama()
    {
        $string = ModelCoba::all();
        $siswa = ModelCoba::orderby('id', 'DESC')->first();
        return view('coba', compact('string', 'siswa'));
    }
}
