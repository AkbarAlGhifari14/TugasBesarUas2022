<?php

namespace App\Exports;

use App\DataObat;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
class DataObatExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataObat::all();
    }
    public function map($data_obat): array
    {
        return [
            $data_obat->id_obat,
            $data_obat->nama_obat,
            $data_obat->datakategori->nama_kategori,
            $data_obat->jenis_obat,
            $data_obat->harga,
            // $data_obat->avatar,
           
        ];
    }
    public function headings(): array
    {
        return [
            'ID OBAT',
            'NAMA OBAT',
            'KATEGORI OBAT',
            'JENIS OBAT',
            'HARGA',
        ];
    }

}
