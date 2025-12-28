<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

            User::factory()->create([
            'first_name' => 'Aman',
            'last_name' => 'Bolsyn',
            'email' => 'anurgozhiyev@gmail.com',
            'password' => 'admin123',
            'role' => 'admin'
        ]);

          User::factory()->create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'root123',
            'role' => 'admin'
        ]);


        Ticket::factory(15)->create();
    }
}
