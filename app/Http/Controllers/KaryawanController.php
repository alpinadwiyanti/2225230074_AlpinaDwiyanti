<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Karyawan;
use Illuminate\View\View;

class KaryawanController extends Controller
{

    public function index(): View
    {
        $_karyawan = Karyawan::all();
        return view ('karyawan.index')->with('_karyawan', $_karyawan);
    }

    
    public function create(): view
    {
        return view('karyawan.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Karyawan::create($input);
        return redirect('_karyawan')->with('flash.message', 'Karyawan Added!');
    }

    public function show(string $id): View
    {
        $_karyawan = Karyawan::find($id);
        return view('karyawan.show')->with('_karyawan', $_karyawan);
    }

    public function edit(string $id): View
    {
        $_karyawan = Karyawan::find($id);
        return view('karyawan.edit')->with('_karyawan', $_karyawan);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $_karyawan = Karyawan::find($id);
        $input = $request->all();
        $_karyawan->update($input);
        return redirect('_karyawan')->with('flash_message', '_karyawan Updated!');
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Karyawan::destroy($id);
        return redirect('_karyawan')->with('flash_message', 'Karyawan deleted!');
    }
}
