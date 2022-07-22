<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Responsibility;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // make factory User data dummy
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // make factory Company data dummy
        // Company::factory(10)->create();

        // make factory Team data dummy
        // Team::factory(30)->create();

        // make factory Role data dummy
        // Role::factory(50)->create();

        // make factory Responsibility data dummy
        // Responsibility::factory(50)->create();

        // make factory Employee data dummy
        Employee::factory(50)->create();
    }
}
