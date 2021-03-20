<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 15;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('company')->insert([
                'cpn_name' => $faker->name,
                'cpn_email' => $faker->email,
                'cpn_phone' => $faker->phoneNumber,
                'cpn_status' =>" ",
                'cpn_address' => $faker->address,
                'cpn_website' => $faker->safeEmailDomain,
            ]);
        }
    }
}
