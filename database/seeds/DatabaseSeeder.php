<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CertificationsTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(CertificationTagsTableSeeder::class);
        $this->call(PortfolioTagsTableSeeder::class);
        $this->call(PortfolioStacksTableSeeder::class);
    }
}
