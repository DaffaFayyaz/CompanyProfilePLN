<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Collection;
use App\Models\Trafo;

class ExportTrafo implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Trafo::all();
    }

    /**
     * Define the headings for the Excel sheet.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'No',
            'Lokasi GI',
            'Nama Bay',
            'Merk Trafo',
            'Tahun Operasi',
            'Ratio Trafo',
            'Rata Rata Pembebanan',
        ];
    }

    /**
     * Map the data for the export.
     *
     * @param mixed $row
     *
     * @return array
     */
    public function map($row): array
    {
        static $count = 1;
        return [
            $count++,
            $row->lokasi_gi,
            $row->nama_bay,
            $row->merk_trafo,
            $row->tahun_operasi,
            $row->ratio_trafo,
            $row->rata_rata_pembebanan,
        ];
    }
}
