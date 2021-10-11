<?php

namespace App\Http\Controllers;

use App\Models\ModelCoba;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelCoba::orderby('id', 'DESC')->get();
        return view('tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelCoba::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas,

        ]);
        return redirect()->route('home.index')->with('status', 'berhasil menambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update = ModelCoba::where('id', $id)->first();
        if (ModelCoba::where('id', $id)->count() == 0) {
            return 'Data Tidak Ada';
        }
        return view('add-data', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ModelCoba::where('id', $id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);
        return redirect()->route('home.index')->with('status', 'berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
