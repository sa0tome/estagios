<?php

use Illuminate\Database\Seeder;
use App\Models\Vaga;
namespace Database\Seeders;

class VagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrada = [
            'cnpj' => '29541003000114',
            'titulo' => 'Vaga',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'expediente' => 30,
            'salario' => 'R$ 1000,00',
            'horario' => '8h às 18h',
            'beneficios' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'divulgar_ate' => '2020-12-20'
        ];
        
        Vaga::create($entrada);
        Vaga::factory(10)->create();
    }
}