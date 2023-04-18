<?php

namespace Database\Factories;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => str(fake()->sentence()),
            'description' => str(fake()->sentence()),
            'status' => Status::NEW->value,
            'project_file' => 'storage/files/file2445.xlsx',
            'project_id' => rand(1, 5),
            'user_id' => rand(1, 10),
        ];
    }
}
