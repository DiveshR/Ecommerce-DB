<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Super Admin', 'description' => 'Full system access'],
            ['name' => 'Admin', 'description' => 'Administrative access'],
            ['name' => 'Vendor Manager', 'description' => 'Can manage multiple vendors'],
            ['name' => 'Vendor', 'description' => 'Single vendor access'],
            ['name' => 'Customer Service', 'description' => 'Support team access'],
            ['name' => 'Content Manager', 'description' => 'Manage product content'],
            ['name' => 'User', 'description' => 'Regular customer access'],
            ['name' => 'Guest', 'description' => 'Limited browse access'],
        ];

        $rolesToInsert = array_map(function ($role) {
            return [
                'name'       => $role['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }, $roles); // Uses a transformation (array_map) to add timestamps to each role record


        Role::insert($rolesToInsert); //Uses the Role::insert() method to efficiently insert all roles in a single database query
    }
}
