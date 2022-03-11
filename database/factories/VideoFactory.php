<?php

namespace Database\Factories;

use App\Models\Categoria;
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
            'titulo'    =>  $this->faker->text(100),
            'descricao' =>  $this->faker->paragraph,
            'img_thumb' => 'thumbs\uCqvTEk32KyjGfB0F1eAuvDP2p9tsQ2197jw7eS5.jpg',
            'video' => 'videos\teste.mp4',
            'ano_lancamento' => $this->faker->year('now'),
            'linguagem' => 'PT_BR',
            'duracao' => $this->faker->randomFloat(null,20,5000),
            'qualidade' => $this->faker->randomElement(['FULLHD','HD']),
            'users_id' => 1,
            'categorias_id' =>  $this->faker->randomElement(Categoria::all())
        ];
    }
}
