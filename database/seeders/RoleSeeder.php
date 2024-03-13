<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Administrador',
            'description' => 'Admin user has full access',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Tutor',
            'description' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Aspirante',
            'description' => 'A',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'Alumno',
            'description' => 'Al',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 5,
            'name' => 'Director',
            'description' => 'dir',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
