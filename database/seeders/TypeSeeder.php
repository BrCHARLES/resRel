<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['ressource', 'cours', 'fiche de lecture', 'activité', 'jeu', 'carte défi', 'jeu en ligne', 'quizz', 'concours']; 
        for($t = 0; $t < 9; $t++) {
            Type::create([
                'name' => $types[$t], 
            ]);
        }
    }
}
