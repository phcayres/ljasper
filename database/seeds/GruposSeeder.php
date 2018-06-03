<?php

use Illuminate\Database\Seeder;

class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qtd = 5;
    
    	factory(App\Grupo::class, $qtd)->create();
    }
}
