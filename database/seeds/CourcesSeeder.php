<?php

use Illuminate\Database\Seeder;
use App\Cource;

class CourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cource = new Cource();
        $cource->name = "PHP";
        $cource->save();

        $cource2 = new Cource();
        $cource2->name = "Front_end";
        $cource2->save();
        
        $cource3 = new Cource();
        $cource3->name = "UX/UI";
        $cource3->save();
    }
}
