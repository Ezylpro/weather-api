<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SavedLocation>
 */
class SavedLocationFactory extends Factory
{

    protected int $user_id;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $state = State::query()->inRandomOrder()->first();

        return [
            'state_id' => $state->id,
            'city_id' => $state->randomCity()->id
        ];
    }
}
