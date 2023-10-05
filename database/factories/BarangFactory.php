<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nama_barang'=>fake()->word(),
            'harga'=>fake()->numberBetween(100000,500000),
            'stok'=>fake()->numberBetween(1,100),
            'id_supplier'=>fake()->numberBetween(1,5)

            //
        ];
    }
}
