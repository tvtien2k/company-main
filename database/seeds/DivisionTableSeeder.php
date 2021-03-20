<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
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
            DB::table('division')->insert([
                'br_id' => "1",
                'dvs_name' => $faker ->name,
                'dvs_email' => $faker ->email,
                'dvs_address' =>$faker ->address,
                'dvs_area' => $faker ->address,
                'dvs_phone' =>$faker ->phoneNumber,
                'dvs_status' => "Stop",
                'dvs_website'=> $faker->safeEmailDomain,
            ]);
        }
    }
}
