<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /* User::create(['name' => 'Admin', 'email' => 'admin@pwa.rs', 'password' => bcrypt('admin'), 'role' => 'admin']);
        User::create(['name' => 'Editor', 'email' => 'editor@pwa.rs', 'password' => bcrypt('editor'), 'role' => 'editor']);
        User::create(['name' => 'User', 'email' => 'user@pwa.rs', 'password' => bcrypt('user'), 'role' => 'user']); */
    }
}