<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ma =['Mercedes-Benz', 'Audi', 'Audi', 'Audi', 'Audi', 'Audi', 'Audi', 'Audi', 'Audi', 'GMC', 'Hyundai', 'Honda', 'Honda', 'Lucid', 'Nissan', 'Nissan', 'Nissan', 'Volkswagen', 'Subaru', 'Volkswagen'];
        $mo =['A-Class', 'A3', 'A4', 'A4 allroad', 'A5', 'A6', 'A6 allroad', 'A7', 'A8', 'Acadia', 'Accent', 'Accord', 'Accord Hybrid', 'Air', 'Altima', 'Ariya', 'Armada', 'Arteon', 'Ascent', 'Atlas'];
        $year = ['2002', '2005', '2003'];
        return [
            'Make'=>$this->faker->randomElement($ma),
            'Model'=>$this->faker->randomElement($mo),
            'Year'=>$this->faker->randomElement($year),
            'plate_no'=>$this->faker->numerify('fg######'),
        ];
    }
}
