<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color_id = [1,2,3,4,5,6,7,8,9,10,11,12];

        $color = ['Rouge', 'Violet foncé', 'Orange', 'Bleu', 'Orange foncé', 'Vert', 'Marron', 'Violet clair', 'Bleu vert','Bleu','Gris','Rose'];

        $rgba = ['rgba(250,128,114,0.8)', 'rgba(70,58,69,0.8)', 'rgba(252,108,52,0.8)', 'rgba(23,116,234,0.8)', 'rgba(227,141,66,0.8)', 'rgba(108,156,148,0.85)', 'rgba(158,108,87,0.8)', 'rgba(164,108,119,0.85)', 'rgba(80,167,159,0.8)','rgba(39,103,240,0.8)','rgba(29,74,103,0.8)','rgba(251,51,100,0.8)'];

        for($t = 1; $t < 12; $t++) {
            Color::create([
                'color_id' => $color_id[$t], 
                'color' => $color[$t], 
                'rgba' => $rgba[$t], 
            ]);
        }
    }
}
