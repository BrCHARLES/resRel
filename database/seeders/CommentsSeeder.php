<?php

namespace Database\Seeders;

use App\Models\Comments;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nid = [1,4,3,6,2]; 
        $user_id = [1,2,1,3,3]; 
        $content = [
            "J'adore cette ressource",
            "Comment puis-je faire pour contacter le tribunal compétent de ma ville ?",
            "Je trouve que cela n'apporte rien de plus sur le sujet",
            "Arrêtez de troller les commentaires",
            "Mais que fait le modérateur du groupe ?"
        ]; 
        $comment_status = [1,1,1,1,1];
        
        $date_time = [
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s')
        ];

        for($t = 0; $t < 5; $t++) {
            Comments::create([
                'nid' => $nid[$t], 
                'user_id' => $user_id[$t], 
                'content' => $content[$t], 
                'comment_status' => $comment_status[$t],
                'date_time' => $date_time[$t],
            ]);
        }
    }
}
