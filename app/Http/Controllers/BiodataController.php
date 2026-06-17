<?php

namespace App\Http\Controllers;

use App\Exports\BiodataExport;
use App\Models\Biodata;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

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

    // Generate Excel (.xlsx) menggunakan package maatwebsite/excel
    public function generateExcel()
    {
        return Excel::download(new BiodataExport, 'Biodata_Diri.xlsx');
    }
}