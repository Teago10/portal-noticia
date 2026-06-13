<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nome' => 'Thiago Affonso',
                'email' => 'thiago@senacsp.br',
                'password' => Hash::make(12345678),
                'perfil' => 'administrador'
            ],
            [
                'nome' => 'Edson Rodrigues',
                'email' => 'edson@senacsp.br',
                'password' => Hash::make(12345678),
                'perfil' => 'professor'
            ]
        ]);
    }
}
