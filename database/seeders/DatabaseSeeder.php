<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::insert([
            'name' => 'serhii',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678')
        ]);
        User::factory(10)->create();
        Project::factory(5)->create();
        Task::factory(10)->create();
    }
}
