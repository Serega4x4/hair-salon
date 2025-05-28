<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperuserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate([
            'name' => 'Super',
            "surname" => 'User',
            'email' => 'serega1988bykov@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '+48534803408',
        ]);

        $role = Role::firstOrCreate(['name' => 'superuser']);
        $user->assignRole($role);

        echo "Superuser created successfully.\n";
    }
}
