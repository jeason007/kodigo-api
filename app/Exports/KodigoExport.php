<?php

namespace App\Exports;

use App\Models\kodigo;
use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class KodigoExport implements FromView
{
    public function view(): View{
        return view("export.excel",[
            "estudiantes" => kodigo::all()
        ]);
    }
}