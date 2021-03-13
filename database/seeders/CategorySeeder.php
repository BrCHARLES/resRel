<?php

namespace Database\Seeders;

use App\Models\Cat;
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
        $images = [
            'images/categories/teacher.jpg',
            'images/categories/loisir.jpg',
            'images/categories/devperso.jpg',
            'images/categories/food.jpg',
            'images/categories/conjoint.jpg',
            'images/categories/language.jpg',
            'images/categories/travail.jpg',
            'images/categories/sante.jpg',
            'images/categories/spiritualite.jpg',
            'images/categories/famille.jpg',
            'images/categories/famille.jpg',
            'images/categories/famille.jpg',
            'images/categories/famille.jpg',
        ];
        $icons = [
            '-microphone-alt',
            '-palette',
            '-paint-brush',
            '-hand-holding',
            '-line2-camera',
            '-line2-game-controller',
            '-briefcase',
            '-file-medical',
            '-line-book',
            '-gratipay',
            '-people-arrows', 
            '-line2-user',
            '-line2-user',
        ];
        $colorids = [
            1,2,3,4,5,6,7,8,9,10,11,12,13
        ];

        for($c = 0; $c <13; $c++) {
            Cat::create([
                'name' => $categories[$c],
                'image' => $images[$c],
                'icon' => $icons[$c],
                'color_id' => $colorids[$c],
            ]);
        }
    }
} 