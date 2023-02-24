<?php

namespace App\Console\Commands;

use App\Mail\sendMail;
use App\Models\kodigo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

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
        $estudiantes = Kodigo::all();

        Mail::to('joseartero0@gmail.com')->send(new sendMail($estudiantes));

    }
}
