<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKayawanRequest;
use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $karyawans = Karyawan::all();
        return response()->json([
            'karyawans' => $karyawans
        ]);
        // dd($karyawans);
     //   return 'Hai ini Rest Api';
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
    public function store(StoreKayawanRequest $request)
    {
        
        //dd($request->all());
        $karyawan = Karyawan::create($request->all());
        
        return response()->json([
            'status'=> true,
            'message' => 'Post karyawan Succesfuly!',
            'data'=> $karyawan
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(karyawan $karyawan)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(StoreKayawanRequest $request, karyawan $karyawan)
    {
        //
        $karyawan->update($request->all());
        return response()->json([
            'status'=> true,
            'message' => 'Update karyawan Succesfuly!',
            'data'=> $karyawan
        ], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(karyawan $karyawan)
    {
        //
        $karyawan->delete();
        return response()->json([
            'status'=> true,
            'message' => 'Delete karyawan Succesfuly!'
        ], 200);
    }
}
