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
        $categories = [
            'Communication', 
            'Culture', 
            'Développement personnel', 
            'Qualité de vie', 
            'Recherche de sens', 
            'Loisirs',
            'Monde professionnel',
            'Santé physique',
            'Santé psychique',
            'Spiritualité',
            'Vie affective',
            'Parentalité',
            'Intelligence émotionnelle'    
    ];
       
        for($c = 0; $c <13; $c++) {
            Category::create([
                'name' => $categories[$c] 
            ]);
        }
    }
} 