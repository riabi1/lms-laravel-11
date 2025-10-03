<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Create instructors
         */
        User::factory()->create([
            'name' => 'Instructor',
            'email' => 'instructor@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'instructor'
        ]);

        /**
         * Create students
         */
        User::factory()->create([
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'student'
        ]);
    }
}
