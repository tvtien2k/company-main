<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
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
            DB::table('project')->insert([
                'dvs_id' => "1",
                'br_id' =>"1",
                'pr_pm' => " Demo",
                'pr_date' => $faker->date(),
                'pr_name' => $faker ->name,
                'pr_quality' => "Good",
                'pr_status' => "Stop",
                'pr_tool' =>$faker->safeEmailDomain,
                'pr_documentation' =>"Don't have",
                'pr_description'=> $faker->safeEmailDomain,

            ]);
        }
    }
}
