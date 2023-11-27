<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matelas;

class MatelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matelas::create([
            'marque' => 'Epeda',
            'taille' => 'Matelas Confort+ 90*190',
            'prix' => 529.00,
        ]);

        Matelas::create([
            'marque' => 'Dreamway',
            'taille' => 'Matelas Assurance 90*190',
            'prix' => 709.00,
        ]);

        Matelas::create([
            'marque' => 'Bultex',
            'taille' => 'Matelas Essentiel 140*190',
            'prix' => 529.00,
        ]);

        Matelas::create([
            'marque' => 'Epeda',
            'taille' => 'Matelas Prestige 160*200',
            'prix' => 1019.00,
        ]);
    }
}
