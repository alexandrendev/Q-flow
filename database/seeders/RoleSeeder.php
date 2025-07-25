<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'receptionist']);
        Role::create(['name' => 'nurse']);
        Role::create(['name' => 'doctor']);
    }
}
