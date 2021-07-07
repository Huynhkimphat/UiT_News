<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'VIDEO_TITLE' => $this->faker->text(50),
            'VIDEO_FILE'=> $this->faker->text(100),
            'VIDEO_DESCRIPTION'=> $this->faker->text(100),
            'VIDEO_AUTHOR'=> $this->faker->text(50),
            'VIDEO_ORIGIN'=> $this->faker->text(100),
            'VIDEO_TYPE'=> $this->faker->text(50)
        ];
    }
}
