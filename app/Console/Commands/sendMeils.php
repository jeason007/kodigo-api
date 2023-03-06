<?php

namespace App\Console\Commands;

use App\Mail\sendMail;
use App\Models\kodigo;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\kodigoCrud;


class sendMeils extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendMeils';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $date = Carbon::now()->timezone('America/El_Salvador');
        $date = substr($date, 0 ,10);

        $estudiantes = Kodigo::where([["Fechacashin","=",$date] , ['estado', '=', 'Activo']])->get();

        if(count($estudiantes) >= 1){
             /* 
             configuracion de correos a notificar puede colocar uno o mas correos.......
             ejemplo: 'mail@gmail.com','segundocorreo@gmail.com'
             */
            if(Mail::to(['mail@mail.com'])->send(new sendMail($estudiantes))){
                $kodigo = new kodigoCrud;
                $kodigo->modificarFecha($estudiantes);
            }
        }


    }
}
