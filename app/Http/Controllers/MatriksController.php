<?php

namespace App\Http\Controllers;

use App\Models\Matriks;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class MatriksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matriks = Matriks::all();
        return view('matriks.index', compact('matriks'));
        // print_r($kriterias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('matriks.create');
        $kriterias = Kriteria::all();
        return view('matriks.create', compact('kriterias'));
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
            'poin' => 'required',
            'nilai' => 'required'
        ]);

        Matriks::create($request->all());
        return redirect(route('index-matriks'))->with('status', 'Data Kriteria Berhasil Ditambahkan!!');
        // print($request->alternatif);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matriks  $matriks
     * @return \Illuminate\Http\Response
     */
    public function show(Matriks $matriks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matriks  $matriks
     * @return \Illuminate\Http\Response
     */
    public function edit(Matriks $matriks)
    {
        $data['matriks'] = Matriks::where('id', $matriks->id)->first();
        $data['kriterias'] = Kriteria::all();
        return view('matriks.edit', $data);
        // var_dump($matriks->poin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matriks  $matriks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matriks $matriks)
    {
        $request->validate([
            'kriteria' => 'required',
            'poin' => 'required',
            'nilai' => 'required'
        ]);
        
        $update = Matriks::where('id', $matriks->id)->update([
                'kriteria' => $request->kriteria,
                'poin' => $request->poin,
                'nilai' => $request->nilai
                ]);

        return redirect(route('index-matriks'))->with('status', 'Data Nilai Matriks Berhasil Diubah!!');
        // print($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matriks  $matriks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matriks $id)
    {
        Matriks::where('id', $id->id)->delete();
        return redirect(route('index-matriks'))->with('status', 'Data Mahasiswa Berhasil Dihapus!!');
        // print($id);
    }
}
