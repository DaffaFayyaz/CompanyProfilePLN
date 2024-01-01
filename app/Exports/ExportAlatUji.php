<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Collection;
use App\Models\AlatUji;

class ExportAlatUji implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return AlatUji::all();
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
            'Lokasi Alat Uji',
            'Nama Alat Uji',
            'Serial ID',
            'Tahun Buat',
            'Merk',
            'Tipe',
            'Kondisi',
            'Keterangan',
            'Jumlah Pemakaian TW 1',
            'Tanggal Kalibrasi Akhir',
            'Sertifikat Kalibrasi',
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
            $row->lokasi_alat_uji,
            $row->nama_alat_uji,
            $row->serial_id,
            $row->tahun_buat,
            $row->merk,
            $row->tipe,
            $row->kondisi,
            $row->keterangan,
            $row->jumlah_pemakaian_tw_1,
            $row->tanggal_kalibrasi_akhir,
            $row->sertifikat_kalibrasi,
        ];
    }
}
