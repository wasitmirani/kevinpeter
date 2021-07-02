<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //   \App\Models\User::factory(5)->create();

//         Role::create([
//             'role' => 'admin'

//          ]);

//         Role::create([
//             'role' => 'student'

//     ]);
//     Role::create([
//         'role' => 'teacher'

// ]);

  User::create([
    'role_id' =>3,
    'name' => 'Teacher1',
    'email' => 'teacher1@gmail.com',
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),

  ]);






        }
}
