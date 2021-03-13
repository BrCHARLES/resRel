<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Jean','Alex','Jack','Martin','Cécile']; 
        $email = ['jean@gmail.com','alex@gmail.com','jack@gmail.com','martin@gmail.com','cecile@gmail.com']; 
        $password = [
            "useruser",
            "adminadmin",
            "useruser",
            "useruser",
            "useruser"
        ]; 
        $role = ['user','admin','user','user','user'];
        

        for($t = 0; $t < 5; $t++) {
            User::create([
                'name' => $name[$t], 
                'email' => $email[$t], 
                'password' => Hash::make($password[$t]), 
                'role' => $role[$t],
            ]);
        }
    }
}
