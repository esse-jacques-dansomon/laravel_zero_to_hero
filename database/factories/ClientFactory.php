<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $country = $this->faker->century;
        $city = $this->faker->city;
        return [
            "firstname"=>$this->faker->firstName,
            "lastname"=>$this->faker->lastName,
            "sex"=> array_rand(['M', 'F'],1),
            "birthdate"=>$this->faker->dateTimeBetween('1975-01-01', '2001-12-30'),
            "birthPlace"=>"$country - $city ",
            "nationality"=>$country,
            "city"=>$city,
            "country"=>$country,
            "NCI"=>array_rand(['Passport', 'NCI', 'Permis',],1),
            "noNCI"=>$this->faker->swiftBicNumber,
            "phone1"=>$this->faker->phoneNumber,
            "phone2"=>$this->faker->phoneNumber,
        ];
    }
}
