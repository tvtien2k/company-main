<?php

use Illuminate\Database\Seeder;
use  App\Company;
use  App\Branch;
use  App\Division;
use  App\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Company::unguard();
        $this->call(CompanyTableSeeder::class);
        Company::reguard();

        Branch::unguard();
        $this->call(BranchTableSeeder::class);
        Branch::reguard();

        Division::unguard();
        $this->call(DivisionTableSeeder::class);
        Division::reguard();

        Project::unguard();
        $this->call(ProjectTableSeeder::class);
        Project::reguard();

    }
}
