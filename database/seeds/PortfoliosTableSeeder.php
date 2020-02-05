<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('portfolio_tags')->insert([
          'name' => 'Startup',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('portfolio_tags')->insert([
          'name' => 'Project',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('portfolio_tags')->insert([
          'name' => 'Hackathon',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('portfolio_tags')->insert([
          'name' => 'Blog',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
    }
}
