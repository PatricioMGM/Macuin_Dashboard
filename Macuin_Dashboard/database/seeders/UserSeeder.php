<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear dos usuarios de ejemplo
        $users = [
            [
                'name' => 'Cliente',
                'email' => 'cliente@algo.com',
                'password' => Hash::make('cliente'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@algo.com',
                'password' => Hash::make('admin'),
            ],
        ];

        // Insertar los usuarios en la base de datos
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
