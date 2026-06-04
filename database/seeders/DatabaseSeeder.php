<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\categoria;
use App\Models\fornecedores;
use App\Models\marcas;
use App\Models\Produtos;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// seeder serve para popular o banco de dados com dados iniciais, como categorias, marcas, fornecedores e produtos, facilitando o desenvolvimento e testes da aplicação.
//php artisan migrate:fresh --seed - para rodar as migrations e os seeders juntos, limpando o banco de dados e populando com os dados definidos nos seeders.
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categorias = collect([
            ['nome' => 'Eletrônicos', 'descricao' => 'Aparelhos eletrônicos e acessórios.'],
            ['nome' => 'Móveis', 'descricao' => 'Móveis para casa e escritório.'],
            ['nome' => 'Alimentos', 'descricao' => 'Alimentos, bebidas e itens de consumo.'],
        ])->map(fn ($data) => categoria::create($data));

        $marcas = collect([
            ['nome' => 'Samsung', 'Origem' => 'Coreia do Sul'],
            ['nome' => 'Dell', 'Origem' => 'Estados Unidos'],
            ['nome' => 'IKEA', 'Origem' => 'Suécia'],
        ])->map(fn ($data) => marcas::create($data));

        $fornecedores = collect([
            ['nome' => 'TechSupply', 'cnpj' => '12.345.678/0001-90', 'contato' => '(11) 4000-1234'],
            ['nome' => 'MoveisMais', 'cnpj' => '98.765.432/0001-10', 'contato' => '(21) 3000-5678'],
            ['nome' => 'AlimExpress', 'cnpj' => '11.222.333/0001-44', 'contato' => '(31) 2000-9876'],
        ])->map(fn ($data) => fornecedores::create($data));

        $produtos = [
            [
                'nome' => 'Smartphone Galaxy S23',
                'descricao' => 'Celular com tela AMOLED, câmera tripla e alta performance.',
                'preco' => '4299.90',
                'estoque' => '35',
                'categoria' => 'Eletrônicos',
                'marca' => 'Samsung',
                'fornecedor' => 'TechSupply',
            ],
            [
                'nome' => 'Notebook Inspiron 15',
                'descricao' => 'Notebook para trabalho e estudos com processador Intel.',
                'preco' => '3199.00',
                'estoque' => '20',
                'categoria' => 'Eletrônicos',
                'marca' => 'Dell',
                'fornecedor' => 'TechSupply',
            ],
            [
                'nome' => 'Mesa de Jantar',
                'descricao' => 'Mesa de jantar em madeira com acabamento moderno.',
                'preco' => '899.90',
                'estoque' => '12',
                'categoria' => 'Móveis',
                'marca' => 'IKEA',
                'fornecedor' => 'MoveisMais',
            ],
            [
                'nome' => 'Cadeira de Escritório',
                'descricao' => 'Cadeira ergonômica com ajuste de altura e apoio para costas.',
                'preco' => '499.90',
                'estoque' => '22',
                'categoria' => 'Móveis',
                'marca' => 'IKEA',
                'fornecedor' => 'MoveisMais',
            ],
            [
                'nome' => 'Café Torrado',
                'descricao' => 'Pacote de café torrado e moído, sabor intenso e aroma marcante.',
                'preco' => '24.90',
                'estoque' => '100',
                'categoria' => 'Alimentos',
                'marca' => 'Dell',
                'fornecedor' => 'AlimExpress',
            ],
        ];

        foreach ($produtos as $produto) {
            Produtos::create([
                'nome' => $produto['nome'],
                'descricao' => $produto['descricao'],
                'preco' => $produto['preco'],
                'estoque' => $produto['estoque'],
                'id_categorias' => $categorias->firstWhere('nome', $produto['categoria'])->id,
                'id_marcas' => $marcas->firstWhere('nome', $produto['marca'])->id,
                'id_fornecedores' => $fornecedores->firstWhere('nome', $produto['fornecedor'])->id,
            ]);
        }
    }
}
