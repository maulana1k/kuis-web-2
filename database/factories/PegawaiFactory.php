<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_pegawai' => fake()->name(),
            'alamat_pegawai' => fake()->address(),
            'tanggal_lahir' => fake()->date(),
            'jabatan_pegawai' => fake()->jobTitle(), 
        ];
    }
}
