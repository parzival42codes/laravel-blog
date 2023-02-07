<?php

namespace Database\Factories;

use App\Enum\Model\BlogPost\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $blogStatus = Arr::shuffle([
            StatusEnum::Draft, StatusEnum::Published, StatusEnum::Hidden,
        ]);

        return [
            'user'        => 1, 'post_title' => $this->faker->text(10), 'post_content' => $this->faker->text(100),
            'post_status' => reset($blogStatus),
        ];
    }
}
