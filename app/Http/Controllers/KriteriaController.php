<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriterias = Kriteria::all();
        return view('kriteria.index', compact('kriterias'));
        // print_r($kriterias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kriteria' => 'required',
            'bobot_kriteria' => 'required',
            'atribut' => 'required'
        ]);

        Kriteria::create($request->all());
        return redirect(route('index-kriteria'))->with('status', 'Data Kriteria Berhasil Ditambahkan!!');
        // print($request->alternatif);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $kriteria)
    {
        return view('kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kriteria $kriteria)
    {
        $request->validate([
            'kriteria' => 'required',
            'bobot_kriteria' => 'required',
            'atribut' => 'required'
        ]);
        
        $update = Kriteria::where('id', $kriteria->id)->update([
                'kriteria' => $request->kriteria,
                'bobot_kriteria' => $request->bobot_kriteria,
                'atribut' => $request->atribut
                ]);

        return redirect(route('index-kriteria'))->with('status', 'Data Alternatif Berhasil Diubah!!');
        // print($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kriteria::destroy($id);
        return redirect(route('index-kriteria'))->with('status', 'Data Mahasiswa Berhasil Dihapus!!');
    }
}
