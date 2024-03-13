<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Fernando',
            'first_lastname' => 'Guzmán',
            'second_lastname' => 'Almonte',
            'email' => 'fergalmonte@gmail.com',
            'password' =>  Hash::make('123'),
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => '/team-3.jpg',
            'gender' => 'masculino',
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Maria Teresa',
            'first_lastname' => 'Rodriguez',
            'second_lastname' => 'Muñoz',
            'email' => 'maria@mail.com',
            'password' =>  Hash::make('123'),
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => '/team-1.jpg',
            'gender' => 'femenino',
            'school_code' => '11111'
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Beatriz',
            'first_lastname' => 'Ponce',
            'second_lastname' => 'Veiga',
            'email' => 'beatriz@mail.com',
            'password' => Hash::make('123'),
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => '/ivana-square.jpg',
            'gender' => 'femenino',
            'school_code' => '22222',
            'income_calendar' => '2023B'
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Ana',
            'first_lastname' => 'Parado',
            'second_lastname' => 'Gonzales',
            'email' => 'ana@mail.com',
            'password' => Hash::make('123'),
            'role_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => '/ivana-squares.jpg',
            'gender' => 'femenino',
            'school_code' => '33333',
            'income_calendar' => '2023B'
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Juan Carlos',
            'first_lastname' => 'Chacón',
            'second_lastname' => 'Borroso',
            'email' => 'juan_carlos@mail.com',
            'password' => Hash::make('123'),
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => '/team-2.jpg',
            'gender' => 'masculino',
            'school_code' => '444444',
            'income_calendar' => '2023B'
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Eduardo',
            'first_lastname' => 'Martin',
            'second_lastname' => 'Romero',
            'email' => 'eduardo@mail.com',
            'password' => Hash::make('123'),
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => '/team-4.jpg',
            'gender' => 'masculino',
            'school_code' => '55555',
            'income_calendar' => '2023B'
        ]);

        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Lucia',
            'first_lastname' => 'Ruiz',
            'second_lastname' => 'Diaz',
            'email' => 'lucia@mail.com',
            'password' => Hash::make('123'),
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => '/team-5.jpg',
            'gender' => 'femenino',
            'school_code' => '66666',
            'income_calendar' => '2023B'
        ]);

        DB::table('users')->insert([
            'id' => 8,
            'name' => 'Juan',
            'first_lastname' => 'Perez',
            'second_lastname' => 'Muñoz',
            'email' => 'juan_perez@mail.com',
            'password' => Hash::make('123'),
            'role_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => '/icons/users/default-avatar.png',
            'gender' => 'masculino',
            'school_code' => '213131',
            'income_calendar' => '2023B',
        ]);
    }
}
