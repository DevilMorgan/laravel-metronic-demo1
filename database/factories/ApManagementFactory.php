<?php

namespace Database\Factories;

use App\Models\ApManagement;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApManagementFactory extends Factory
{
    protected $model = ApManagement::class;

    public function definition()
    {
        return ApManagement::definition($this->faker);
    }
}
