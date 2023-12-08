<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Trip::factory(10)->create();
//        \App\Models\Jeep::factory(10)->create();
//        \App\Models\Revenue::factory(10)->create();
        // \App\Models\Fares::factory(10)->create();
        // \App\Models\Places::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(AdminSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Card::factory()->create([
            'card_id' => 0363607347,
            'card_balance' => 10000,
        ]);
    }
}
