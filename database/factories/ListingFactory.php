<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        description_array
        return [
            'role' => $this->faker->jobTitle,
            'location' => $this->faker->city,
            'job_type' => $this->faker->randomElement(['Full-Time', 'Hybrid', 'Remote']),
            'category' => $this->faker->randomElement(['Full-Time', 'Hybrid', 'Remote']),
            'description' => $this->faker->paragraph,
            'salary_range' => '$' . $this->faker->numberBetween(2500, 6000) . ' - $' . $this->faker->numberBetween(6000, 10000),
            'yearly_salary' => '$' . $this->faker->numberBetween(50000, 120000),
            'no_vacancy' => $this->faker->randomDigitNotNull,
            'company' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'company_description' => $this->faker->paragraph,
            'website' => $this->faker->url,
        ];
    }
}
