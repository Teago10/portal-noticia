<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'titulo' => 'Laravel 12 traz melhorias de desempenho',
                'resumo' => 'Nova versão do framework promete mais produtividade.',
                'conteudo' => 'O Laravel 12 foi lançado com melhorias de desempenho, novas ferramentas para autenticação e otimizações para aplicações web modernas.',
                'imagem' => 'laravel12.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categorias_id' => 1
            ],
            [
                'titulo' => 'Mercado de tecnologia segue em expansão',
                'resumo' => 'Setor continua gerando oportunidades.',
                'conteudo' => 'Empresas de diversos segmentos estão ampliando seus investimentos em tecnologia e contratando profissionais qualificados.',
                'imagem' => 'mercado-ti.jpg',
                'status' => 1,
                'usuario_id' => 2,
                'categorias_id' => 2
            ],
            [
                'titulo' => 'PHP continua relevante no desenvolvimento web',
                'resumo' => 'Linguagem mantém forte presença no mercado.',
                'conteudo' => 'Com frameworks modernos como Laravel, PHP segue sendo uma das linguagens mais utilizadas para desenvolvimento de sistemas web.',
                'imagem' => 'php.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categorias_id' => 1
            ],
            [
                'titulo' => 'Senac promove feira de inovação',
                'resumo' => 'Evento reúne alunos e empresas.',
                'conteudo' => 'A feira apresentou projetos desenvolvidos por estudantes e proporcionou networking com empresas da área de tecnologia.',
                'imagem' => 'senac.jpg',
                'status' => 1,
                'usuario_id' => 2,
                'categorias_id' => 3
            ],
            [
                'titulo' => 'Inteligência Artificial ganha espaço',
                'resumo' => 'Empresas adotam soluções inteligentes.',
                'conteudo' => 'Ferramentas baseadas em IA estão transformando processos internos e aumentando a produtividade das organizações.',
                'imagem' => 'ia.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categorias_id' => 4
            ],
            [
                'titulo' => 'C# se destaca em aplicações corporativas',
                'resumo' => 'Linguagem continua popular entre empresas.',
                'conteudo' => 'Com o ecossistema .NET, C# permanece como uma das principais escolhas para sistemas corporativos e aplicações empresariais.',
                'imagem' => 'csharp.jpg',
                'status' => 1,
                'usuario_id' => 2,
                'categorias_id' => 1
            ],
            [
                'titulo' => 'Segurança digital preocupa organizações',
                'resumo' => 'Ataques virtuais aumentam em 2026.',
                'conteudo' => 'Especialistas alertam para a importância da implementação de políticas de segurança da informação e treinamentos internos.',
                'imagem' => 'seguranca.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categorias_id' => 5
            ],
            [
                'titulo' => 'Computação em nuvem cresce no Brasil',
                'resumo' => 'Empresas migram seus sistemas para a nuvem.',
                'conteudo' => 'A adoção de serviços em nuvem reduz custos operacionais e aumenta a escalabilidade das aplicações.',
                'imagem' => 'cloud.jpg',
                'status' => 1,
                'usuario_id' => 2,
                'categorias_id' => 2
            ],
            [
                'titulo' => 'Desenvolvimento Full Stack está em alta',
                'resumo' => 'Profissionais versáteis são cada vez mais procurados.',
                'conteudo' => 'Empresas valorizam desenvolvedores capazes de atuar tanto no front-end quanto no back-end dos sistemas.',
                'imagem' => 'fullstack.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categorias_id' => 1
            ],
            [
                'titulo' => 'Banco de dados é fundamental para sistemas modernos',
                'resumo' => 'Armazenamento eficiente garante desempenho.',
                'conteudo' => 'MySQL, PostgreSQL e SQL Server continuam sendo amplamente utilizados em aplicações corporativas e web.',
                'imagem' => 'banco-dados.jpg',
                'status' => 1,
                'usuario_id' => 2,
                'categorias_id' => 2
            ]
        ]);
    }
}
