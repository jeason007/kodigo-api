<?php

namespace App\Exports;

use App\Models\kodigo;
use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class KodigoExport implements FromView, ShouldAutoSize
{
    public function view(): View{
        return view("export.excel",[
            "estudiantes" => kodigo::all()
        ]);
    }
}