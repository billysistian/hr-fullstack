<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::latest()->get();

        return response()->json($karyawan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required|date',
            'gaji' => 'required|numeric',
        ]);

        $karyawan = Karyawan::create($validated);

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $karyawan
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        return response()->json($karyawan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required|date',
            'gaji' => 'required|numeric',
        ]);

        $karyawan->update($validated);

        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $karyawan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
