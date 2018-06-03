<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PessoasSeeder::class);
	    $this->call(GruposSeeder::class);
	    $this->call(PessoaGrupoSeeder::class);
    }
}
