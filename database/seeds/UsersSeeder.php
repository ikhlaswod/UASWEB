<?php

use Illuminate\Database\Seeder;
use App\Role; 
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Membuat role admin 
        $adminRole = new Role(); 
        $adminRole->name = "admin"; 
        $adminRole->display_name = "Admin"; 
        $adminRole->save();

        $memberRole = new Role;
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

    

        // Membuat sample admin 
        $admin = new User(); 
        $admin->name = 'Admin Jersey'; 
        $admin->email = 'adminjersey@gmail.com'; 
        $admin->password = bcrypt('12345678'); 
        $admin->is_verified = 1;
        $admin->save();
        $admin->attachRole($adminRole);

  
    }
}
