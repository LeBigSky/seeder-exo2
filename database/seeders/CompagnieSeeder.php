<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompagnieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert([
            [
                "compagnie" => "Microsoft",
                "adresse" => "rue des machins chouette 39 1000 Bruxelles",
                "nom" => "Gary",
                "Prenom" => "Gary",
                "img" =>  "https://logo-marque.com/wp-content/uploads/2020/09/Microsoft-Symbole.png",
                "email" =>  "martin@molengeek.com",
                "telephone" => 485358421,
            ],
            [
                "compagnie" => "Facebook",
                "adresse" => "rue des machins chouette 39 1000 Bruxelles",
                "nom" => "Gary",
                "Prenom" => "Gary",
                "img" =>  "https://www.logodesign.net/logo/abstract-arrow-with-financial-bars-76ld.png",
                "email" =>  "marouane@molengeek.com",
                "telephone" => 45869523,
            ],
            [
                "compagnie" => "Molengeek",
                "adresse" => "rue des machins chouette 39 1000 Bruxelles",
                "nom" => "Gary",
                "Prenom" => "Gary",
                "img" =>  "https://www.logodesign.net/logo/abstract-arrow-with-financial-bars-76ld.png",
                "email" =>  "calvin@molengeek.com",
                "telephone" => 485568941,
            ],
            [
                "compagnie" => "Twitter",
                "adresse" => "rue des machins chouette 39 1000 Bruxelles",
                "nom" => "Gary",
                "Prenom" => "Gary",
                "img" =>  "https://logolook.net/wp-content/uploads/2021/06/Twitter-Logo-2010.png",
                "email" =>  "gary@molengeek.com",
                "telephone" => 47455887,
            ],
            [
                "compagnie" => "Google",
                "adresse" => "rue des machins chouette 39 1000 BruxellesGary",
                "nom" => "Gary",
                "Prenom" => "Gary",
                "img" =>  "https://www.logodesign.net/logo/abstract-arrow-with-financial-bars-76ld.png",
                "email" =>  "Yves@molengeek.com",
                "telephone" => 48544399,
            ],
            [
                "compagnie" => "Reddit",
                "adresse" => "rue des machins chouette 39 1000 Bruxelles",
                "nom" => "Gary",
                "Prenom" => "Gary",
                "img" =>  "https://www.logodesign.net/logo/abstract-arrow-with-financial-bars-76ld.png",
                "email" =>  "machin@molengeek.com",
                "telephone" => 5888556,
            ],
            ]);
    }
}
