<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('slug','admin')->first();
        // Create admin
        User::updateOrCreate([
            'role_id' => $adminRole->id,
            'usertype'=> 'admin',
            'name' => 'Md. Samiul Hoque',
            'email' => 'samiulsiam59@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => true
        ]);

        // Create user
        $userRole = Role::where('slug','user')->first();
        User::updateOrCreate([
            'role_id' => $userRole->id,
            'usertype'=> 'user',
            'name' => 'Sharmin Akter Mumu',
            'email' => 'mumi@mail.com',
            'password' => Hash::make('password'),
            'status' => false
        ]);
    }
}
