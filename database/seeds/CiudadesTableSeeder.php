<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ciudad as Ciudad;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create(['nombre' => 'Bogotá']);
        Ciudad::create(['nombre' => 'Medellín']);
        Ciudad::create(['nombre' => 'Cali']);
        Ciudad::create(['nombre' => 'Barranquilla']);
        Ciudad::create(['nombre' => 'Cartagena']);
    }
}
