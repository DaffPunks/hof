<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FillReservationTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hof:filltable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $date = Carbon::today()->addHours(8);
        for ($d = 0; $d < 800; $d++){
            for ($i = 0; $i < 7; $i++) {
                if($i < 4){
                    DB::table('reservation')->insert([
                        ['time' => $date->addHours(2)->toDateTimeString(), 'price' => 2500, 'session' => ($i + 1)]
                    ]);
                }
                else{
                    DB::table('reservation')->insert([
                        ['time' => $date->addHours(2)->toDateTimeString(), 'price' => 3000, 'session' => ($i + 1)]
                    ]);
                }
            }
            $date->addHours(10);
        }
    }
}
