<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url'=>'cursos/'.$this->faker->image('public/storage/cursos',640,480,null,false),//se almacenara cursos/imagen
            'imageable_id'=>null,//esto podria no ir
            'imageable_type'=>null,//esto podria no ir
        ];
    }
}
