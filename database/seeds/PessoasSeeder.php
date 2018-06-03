<?php

use Illuminate\Database\Seeder;

class PessoasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qtd = 50;
    
        factory(App\Pessoa::class, $qtd)->create();
    }
}
