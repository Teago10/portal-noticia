<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categorias")->insert([
            [
                'nome' => 'Administracao',
                'descricao' => 'Setor responsável pela gestão geral da empresa',
                'cor' => '#2563eb'
            ],

            [
                'nome' => 'Financeiro',
                'descricao' => 'Controle de pagamentos e recebimentos',
                'cor' => '#16a34a'
            ],

            [
                'nome' => 'Recursos Humanos',
                'descricao' => null,
                'cor' => '#dc2626'
            ],

            [
                'nome' => 'Tecnologia',
                'descricao' => 'Desenvolvimento e manutenção de sistemas',
                'cor' => '#7c3aed'
            ],

            [
                'nome' => 'Marketing',
                'descricao' => null,
                'cor' => '#ea580c'
            ]

        ]);
    }
}
