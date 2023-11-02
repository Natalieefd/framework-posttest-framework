<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Http\Request;

class staffController extends Controller
{
    public function create()
    {
        return view('admin.crud.createStaff', [
            'staffs' => staff::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validate Input
        $validateData = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'nama' => 'required|string',
            'jabatan' => 'required|string',
        ]);

        staff::create($validateData);

        return redirect()->route('admin.dashboard')->with(
                'success',
                'Data Staff Berhasil Ditambahkan',
            );
    }
    
    public function edit($id)
    {
        return view('admin.crud.editStaff', [
            'staffs' => staff::all()->where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'nama' => 'required|string',
            'jabatan' => 'required|string',
        ]);

        $mahasiswa = staff::findOrFail($id);
        $mahasiswa->update([
            'username' => $request->username,
            'password' => $request->password,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('admin.dashboard')->with(
                'success',
                'Data Staff Berhasil Diubah',
            );
    }

    public function delete($id)
    {
        $staff = staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('admin.dashboard')->with(
                'success',
                'Data Staff Berhasil Dihapus',
            );
    }
}
