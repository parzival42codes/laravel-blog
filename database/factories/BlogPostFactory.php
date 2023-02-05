<?php

namespace Database\Factories;

use App\Enum\Model\BlogPost\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use function _PHPStan_4dd92cd93\React\Promise\Stream\first;

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
            StatusEnum::DRAFT,
            StatusEnum::PUBLISHED,
            StatusEnum::HIDDEN,
        ]);

        return [
            'user' => 1,
            'post_title' => $this->faker->text(10),
            'post_content' => $this->faker->text(100),
            'post_status' => first($blogStatus),
        ];
    }
}
