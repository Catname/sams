<?php

namespace Database\Factories;

use App\Models\Achievement;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class AchievementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Achievement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $chinese = $this->faker->numberBetween(0,150);
        $math = $this->faker->numberBetween(0,150);
        $english = $this->faker->numberBetween(0,150);
        $count = $chinese + $math + $english;

        return [
            'student_id' => Student::factory(),// 关联操作
            'chinese' => $chinese,
            'math' => $math,
            'english' => $english,
            'count' => $count,
        ];
    }
}
