<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\Validator;

class DokterController extends Controller
{
    public function formDokter(){
        return view('form-dokter');
    }

    public function editDokter($id){
        $dokter = Dokter::find($id);
        if (!$dokter) {
            return redirect('/dashboard')->with('error', 'Data supplier tidak ditemukan');
        }
        // dd($dokter);
        return view('edit-dokter', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'spesialis' => 'required|string|max:100',
            'phone' => 'required|string|min:11|max:15',
            'email' => 'required|string|email|max:255|unique:dokter,email,' . $id,
        ]);

        $doctor = Dokter::findOrFail($id);
        $doctor->name = $request->name;
        $doctor->spesialis = $request->spesialis;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->save();

        return redirect()->route('home')->with('success', 'Data Berhasil Diperbarui');
    }

    public function destroy($id){
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('home')->with('success', 'Data Dokter Berhasil Dihapus');
    }

    public function dokter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'phone' => 'required|string|min:6|max:15',
            'email' => 'required|string|email|max:255|unique:dokter',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $dokter = Dokter::create([
            'name' => $request->name,
            'spesialis' => $request->spesialis,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return response()->json(['message' => 'Dokter berhasil ditambahkan', 'dokter' => $dokter], 201);
    }

    public function storeDokter(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'spesialis' => 'required|string|max:100',
            'phone' => 'required|string|min:11|max:15',
            'email' => 'required|string|email|max:255|unique:dokter',
        ]);

        $dokter = new Dokter();
        $dokter->name = $request->name;
        $dokter->spesialis = $request->spesialis;
        $dokter->phone = $request->phone;
        $dokter->email = $request->email;
        $dokter->save();

        return redirect('/dashboard')->with('success', 'Data Berhasil Ditambah');

    }
}
