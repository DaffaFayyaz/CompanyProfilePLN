<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Collection;
use App\Models\Tower;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportTower implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Tower::all();
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
            'Wilayah Kerja',
            'UPT',
            'ULTG',
            'Route',
            'Tegangan KV',
            'Panjang SU KMS',
            'Saluran SK KMS',
            'Jenis',
            'Luas Penampang',
            'Kapasitas A',
            'Tahun Operasi',
            'Tanggal Operasi',
            'Sirkit',
            'Tower',
            'Joint',
            'Status Operasi',
            'Keterangan',
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
            $row->wilayah_kerja,
            $row->upt,
            $row->ultg,
            $row->route,
            $row->tegangan_kv,
            $row->panjang_su_kms,
            $row->saluran_sk_kms,
            $row->jenis,
            $row->luas_penampang,
            $row->kapasitas_a,
            $row->tahun_operasi,
            $row->tanggal_operasi,
            $row->sirkit,
            $row->tower,
            $row->joint,
            $row->status_operasi,
            $row->keterangan,
        ];
    }
    
}
