<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
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
            DB::table('branch')->insert([
            'br_name' => $faker ->name,
            'cpn_id' => "1",
            'br_email' => $faker ->email,
            'br_address' =>$faker ->address,
            'br_area' => $faker ->address,
            'br_phone' =>$faker ->phoneNumber,
            'br_status' => "Stop",
            'br_website'=> $faker->safeEmailDomain,
            ]);
        }
    }
}
