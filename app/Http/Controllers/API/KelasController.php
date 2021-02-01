<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function kelas()
    {
         return response()->json(Kelas::get(), 200);
    }

    public function kelasid($id)
    {
         return response()->json(Kelas::find($id), 200);
    }

    public function addkelas(Request $request)
    {
        $data = Kelas::create($request->all());
        return response()->json($data, 201);
    }
}
