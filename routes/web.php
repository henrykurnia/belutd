<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Halaman Utama (Landing Page)
Route::get('/', function () {
    return view('example.index');
})->name('home');

// Halaman Form Diagnosis (Step 1: Gejala Klinis & Step 2: Faktor Risiko)
Route::get('/diagnosis', function () {
    return view('example.form_gejala');
})->name('diagnosis');

// Proses Submit Seluruh Data Diagnosis (Gejala Klinis + Faktor Risiko)
Route::post('/diagnosis/proses', function (Request $request) {
    $validated = $request->validate([
        // Step 1: Gejala Klinis
        'nama_kucing' => 'required|string|max:100',
        'hematuria' => 'required',
        'disturia' => 'required',
        'periuria' => 'required',
        'stanguria' => 'required',
        'anuria' => 'required',
        'oliguria' => 'required',
        'pollakuria' => 'required',
        'muntah' => 'required',
        'tingkat_keaktifan' => 'required',
        'tingkat_nafsu_makan' => 'required',
        'dehidrasi' => 'required',

        // Step 2: Faktor Risiko
        'jenis_kelamin' => 'required',
        'obesitas' => 'required',
        'status_sterilisasi' => 'required',
        'jenis_pakan' => 'required',
        'punya_kucing_lain' => 'required',
        'tingkat_keramaian' => 'required',
    ]);

    session(['diagnosis_input' => $validated]);

    return redirect()->route('diagnosis.hasil');
})->name('diagnosis.store');

// Halaman Hasil Diagnosis (Placeholder sementara)
Route::get('/diagnosis/hasil', function () {
    if (!session()->has('diagnosis_input')) {
        return redirect()->route('diagnosis');
    }

    return redirect()->route('diagnosis')->with('success', 'Data gejala klinis dan faktor risiko berhasil dikirim untuk diagnosa!');
})->name('diagnosis.hasil');

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return redirect()->route('home')->with('info', 'Halaman tentang kami segera hadir!');
})->name('tentang');