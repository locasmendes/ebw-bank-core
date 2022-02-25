<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::firstOrCreate(
            ['email' => 'fabio.leandro@evolutap.com.br'],
            [
                'name'     => 'Fabio de Melo',
                'password' => bcrypt('homolog123'),
            ]
        );
    }
}
