<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();

        return view('admin.supplier.index',[
            'supplier'=>$supplier
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.supplier.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $supplier             = new Supplier;
        $supplier->kd_supp    = $request->kd_supp;
        $supplier->nm_supp    = $request->nm_supp;
        $supplier->alamat     = $request->alamat;
        $supplier->telepon    = $request->telepon;
        $supplier->save();

        Alert::success('Pesan ','Data berhasil disimpan');
        return redirect('/supplier');
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
        $supplier_edit = Supplier::findOrFail($id);
        return view('admin.supplier.edit',['supplier'=>$supplier_edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier             = Supplier::findOrFail($id);
        $supplier->kd_supp    = $request->kd_supp;
        $supplier->nm_supp    = $request->nm_supp;
        $supplier->alamat     = $request->alamat;
        $supplier->telepon    = $request->telepon;
        $supplier->save();

        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
