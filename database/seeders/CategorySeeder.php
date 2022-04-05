<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate([
            'category_name' => 'Finanças',
            'category_slug' => 'financas'
        ]);
        Category::firstOrCreate([
            'category_name' => 'Liderança',
            'category_slug' => 'lideranca'
        ]);
        Category::firstOrCreate([
            'category_name' => 'Gestão',
            'category_slug' => 'gestao'
        ]);
        Category::firstOrCreate([
            'category_name' => 'RH',
            'category_slug' => 'rh'
        ]);
        Category::firstOrCreate([
            'category_name' => 'Vendas',
            'category_slug' => 'vendas'
        ]);
    }
}
