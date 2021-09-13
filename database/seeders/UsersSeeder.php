<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= User::query()->create([
            'name' => 'Eugene',
            'email' => 'ravenio@ex.ua',
            'password' => bcrypt('password2106740'),
        ]);
        $admin->assignRole('admin');
        $manager = User::query()->create([
            'name' => 'Manager',
            'email' => 'manager@ex.ua',
            'password' => bcrypt('manager2106740'),
        ]);

        $manager->assignRole('manager');

    }
}
