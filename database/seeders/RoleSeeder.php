<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'superuser']);
        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'master']);
        Role::create(['name' => 'client']);
    }
}
