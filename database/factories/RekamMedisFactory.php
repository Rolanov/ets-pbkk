<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\RekamMedis;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RekamMedis::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dokter_id' =>mt_rand(1,5),
            'pasien_id' =>mt_rand(1,5),
            'KondisiKesehatan' =>$this->faker->sentence(mt_rand(5,9)),
            'suhu' =>mt_rand(35,45.5),
            // 'resep' => $this->faker->mimeType()
        ];
    }
}
