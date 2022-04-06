<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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
        $this->call([
            GeneralSeeder::class,
            // PostSeeder::class,
            CategorySeeder::class,
            PagesSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();


        User::firstOrCreate(
            ['email' => 'fabio.leandro@evolutap.com.br'],
            [
                'name'     => 'Fabio de Melo',
                'password' => bcrypt('homolog123'),
            ]
        );
    }
}
