<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Akun;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akun = Akun::all();

        return view('admin.akun.index',[
            'akun'=>$akun
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $akun           = new Akun;
        $akun->no_akun  = $request->no_akun;
        $akun->nm_akun  = $request->nm_akun;
        $akun->save();

        Alert::success('Pesan ','Data berhasil disimpan');
        return redirect('/akun');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $akun = Akun::findOrFail($id);
        return view('admin.akun.edit',['akun'=>$akun]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $akun           = Akun::findOrFail($id);
        $akun->no_akun  = $request->no_akun;
        $akun->nm_akun  = $request->nm_akun;
        $akun->save();

        return redirect()->route('akun.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $akun=Akun::findOrFail($id);
        $akun->delete();
        
        Alert::success('Pesan ','Data berhasil dihapus');
        return redirect()->route('akun.index');
    }
}
