<?php

use Illuminate\Database\Seeder;

class CertificationTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('certification_tags')->insert([
          'name' => 'AWS',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certification_tags')->insert([
          'name' => 'Blockchain',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certification_tags')->insert([
          'name' => 'PHP',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certification_tags')->insert([
          'name' => 'Comptia',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certification_tags')->insert([
          'name' => 'Security',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
    }
}
