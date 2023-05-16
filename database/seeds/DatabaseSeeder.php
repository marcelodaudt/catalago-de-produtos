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
        DB::table('produtos')->insert([
            [
                'sku' => '001',
                'titulo' => 'Produto 001',
                'descricao' => 'Breve descrição do produto 001.',
                'preco' => '15.00',
            ],
            [
                'sku' => '002',
                'titulo' => 'Produto 002',
                'descricao' => 'Breve descrição do produto 002.',
                'preco' => '11.00',
            ],
            [
                'sku' => '003',
                'titulo' => 'Produto 003',
                'descricao' => 'Breve descrição do produto 003.',
                'preco' => '10.00',
            ],
            [
                'sku' => '004',
                'titulo' => 'Produto 004',
                'descricao' => 'Breve descrição do produto 004.',
                'preco' => '5.00',
            ],
            [
                'sku' => '005',
                'titulo' => 'Produto 005',
                'descricao' => 'Breve descrição do produto 005.',
                'preco' => '400.00',
            ],
            [
                'sku' => '006',
                'titulo' => 'Produto 006',
                'descricao' => 'Breve descrição do produto 006.',
                'preco' => '2000.00',
            ],
            [
                'sku' => '007',
                'titulo' => 'Produto 007',
                'descricao' => 'Breve descrição do produto 007.',
                'preco' => '70.00',
            ],
            [
                'sku' => '008',
                'titulo' => 'Produto 008',
                'descricao' => 'Breve descrição do produto 008.',
                'preco' => '50.00',
            ],
            [
                'sku' => '009',
                'titulo' => 'Produto 009',
                'descricao' => 'Breve descrição do produto 009.',
                'preco' => '2500.00',
            ],
            [
                'sku' => '010',
                'titulo' => 'Produto 010',
                'descricao' => 'Breve descrição do produto 010.',
                'preco' => '330.00',
            ],
        ]);

        DB::table('comentarios')->insert([
            [
                'produtos_id' => '1',
                'usuario' => 'José',
                'comentario' => 'Ótimo produto.',
            ],
            [
                'produtos_id' => '2',
                'usuario' => 'Maria',
                'comentario' => 'Ficou devendo.',
            ],
            [
                'produtos_id' => '2',
                'usuario' => 'José',
                'comentario' => 'Não é muito bom.',
            ],
            [
                'produtos_id' => '3',
                'usuario' => 'Bofá',
                'comentario' => 'Produto recomendado.',
            ],
            [
                'produtos_id' => '4',
                'usuario' => 'Maria',
                'comentario' => 'Aprovado, atendeu as expectativas.',
            ],
            [
                'produtos_id' => '5',
                'usuario' => 'Pedro',
                'comentario' => 'Atendeu as expectativas.',
            ],
            [
                'produtos_id' => '6',
                'usuario' => 'Ana',
                'comentario' => 'Muito caro.',
            ],
            [
                'produtos_id' => '9',
                'usuario' => 'Wilson',
                'comentario' => 'Aprovado, atendeu as expectativas.',
            ],
            [
                'produtos_id' => '10',
                'usuario' => 'Amanda',
                'comentario' => 'Muito bom.',
            ],
            [
                'produtos_id' => '10',
                'usuario' => 'Carlos',
                'comentario' => 'Excelente produto.',
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'usuario',
                'email' => 'usuario@gmail.com',
                'password' => Hash::make('123456'),
            ],
        ]);



    }
}
