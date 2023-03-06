<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'FreshMoe',
            'username' => str_shuffle(md5(Str::random(10))),
            'role' => 1,
            'email' => 'admin@freshmoe.com',
            'password' => '$2y$10$aqREcJNxO/dNZVdOMSI10uFtUYIeeVqa8kpIDaNIIcWNtG1509w4u', // 123456
//            'remember_token' => Str::random(10),
            'token' => str_shuffle(md5(date("ymdhis"))),
        ];
    }
}
