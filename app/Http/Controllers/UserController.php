<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Matriks;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('user.index');
    }

    public function provider()
    {
        return view('user.provider');
    }
        
    public function testing()
    {
        $data['alternatif'] = Alternatif::all();
        $data['matriks'] = Kriteria::selectRaw('kriterias.*, matriks.*')->leftjoin('matriks','kriterias.kriteria','=','matriks.kriteria')->get();
        $data['kriteria'] = Kriteria::all();
        $data['tab'] = true;
        return view('user.testing', $data);
        // var_dump($data['kriteria']);
    }

    public function testingpost(Request $request){
        $data['alternatif'] = Alternatif::all();
        $data['matriks'] = Kriteria::selectRaw('kriterias.*, matriks.*')->leftjoin('matriks','kriterias.kriteria','=','matriks.kriteria')->get();
        $data['kriteria'] = Kriteria::all();
        $data['tab'] = true;
        $req = (array)$request->request;
        $data['request'] = $req["\x00*\x00parameters"];
        return view('user.testing', $data);
    }

    public function about()
    {
        return view('user.about');
    }
    
    public function contact()
    {
        return view('user.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
