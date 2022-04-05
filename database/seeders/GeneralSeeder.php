<?php

namespace Database\Seeders;

use App\Models\General;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hasGeneral = General::limit(1)->exists();

        if (!$hasGeneral) {

            General::create([
                'contact_phone' => '0800 894 3000',
                'contact_email' => 'cac@ebwbank.com.br',
                'social_linkedin' => 'https://www.linkedin.com/company/ebw-bank',
                'social_instagram' => 'https://www.instagram.com/ebwbank',
                'social_facebook' => 'https://www.facebook.com/ebwbank/',
                'social_youtube' => 'https://youtube.com',
                'social_twitter' => 'https://twitter.com',
                'maps' => json_decode('[{"mapa": "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.8702462556644!2d-46.699111385382686!3d-23.6089859692371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce517745d7755b%3A0x26864f725c60808e!2sEBW%20Bank%20-%20WTC!5e0!3m2!1spt-BR!2sbr!4v1646762987718!5m2!1spt-BR!2sbr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>", "estado": "São Paulo", "endereco": "World Trade Center <br>\nAv. das Nações Unidas, 12551- 19° Andar <br>\nSala 1912 - CEP: 04578-903."}, {"mapa": "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d479.88135772517836!2d-47.883776257438974!3d-15.801271916625488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3adffaaaa80d%3A0xcd93d19bd1cd5b51!2sPrime%20Business%20Convenience!5e0!3m2!1spt-BR!2sbr!4v1646763023118!5m2!1spt-BR!2sbr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>", "estado": "Distrito Federal", "endereco": "Ed. Prime Business <br>\nSetor Bancário Sul, Q 2 Salas 09/10 <br>\nAsa Sul - CEP: 70.070-120."}]')
            ]);
        }
    }
}
