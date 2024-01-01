<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Collection;
use App\Models\Bayline;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportBayline implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Bayline::all();
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
            'Gardu Induk',
            'Uraian',
            'KV',
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
            $row->gardu_induk,
            $row->uraian,
            $row->KV,
        ];
    }
}
