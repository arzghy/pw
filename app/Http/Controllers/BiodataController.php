<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BiodataController extends Controller
{
    // Menampilkan halaman utama
    public function index()
    {
        return view('biodata.index');
    }

    // Generate PDF (menggunakan package dompdf yang sudah berhasil diinstall)
    public function generatePDF()
    {
        $biodata = Biodata::first(); 
        
        $pdf = Pdf::loadView('biodata.pdf', compact('biodata'));
        return $pdf->stream('Biodata_Diri.pdf'); 
    }

    // Generate Excel menggunakan fitur bawaan PHP (Format CSV)
    public function generateExcel()
    {
        $biodata = Biodata::all();
        $fileName = 'Biodata_Diri.csv';

        // Mengatur header agar browser mengunduhnya sebagai file
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        // Membuka output stream untuk menulis data Excel/CSV
        $callback = function() use($biodata) {
            $file = fopen('php://output', 'w');

            // 1. Menulis baris pertama (Header Kolom)
            fputcsv($file, [
                'Nama', 
                'NIM', 
                'Jenis Kelamin', 
                'Tempat Lahir', 
                'Tanggal Lahir', 
                'Email', 
                'Telepon', 
                'Program Studi'
            ]);

            // 2. Menulis baris berikutnya (Isi Data Biodata)
            foreach ($biodata as $data) {
                fputcsv($file, [
                    $data->nama,
                    $data->nim,
                    $data->jenis_kelamin,
                    $data->tempat_lahir,
                    $data->tanggal_lahir,
                    $data->email,
                    $data->telepon,
                    $data->program_studi
                ]);
            }

            fclose($file);
        };

        // Mengembalikan response berupa unduhan file
        return response()->stream($callback, 200, $headers);
    }
}