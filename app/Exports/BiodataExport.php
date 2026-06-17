<?php

namespace App\Exports;

use App\Models\Biodata;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BiodataExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    /**
     * Mengambil data yang akan diekspor.
     */
    public function collection()
    {
        return Biodata::all();
    }

    /**
     * Baris header kolom.
     */
    public function headings(): array
    {
        return [
            'Nama',
            'NIM',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Email',
            'Telepon',
            'Program Studi',
        ];
    }

    /**
     * Memetakan setiap baris data ke kolom yang sesuai.
     */
    public function map($biodata): array
    {
        return [
            $biodata->nama,
            $biodata->nim,
            $biodata->jenis_kelamin,
            $biodata->tempat_lahir,
            $biodata->tanggal_lahir,
            $biodata->email,
            $biodata->telepon,
            $biodata->program_studi,
        ];
    }

    /**
     * Styling sederhana: bold pada baris header.
     */
    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}