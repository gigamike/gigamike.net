<?php

use Illuminate\Database\Seeder;

class StacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stacks')->insert([
          'name' => 'PHP',
          'image_filename' => 'php.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Laravel',
          'image_filename' => 'laravel.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Zend Framework',
          'image_filename' => 'zend_framework.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Multichain',
          'image_filename' => 'multichain.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Wordpress',
          'image_filename' => 'wordpress.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'EOS',
          'image_filename' => 'eos.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Ethereum',
          'image_filename' => 'ethereum.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Alexa',
          'image_filename' => 'alexa.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Yii',
          'image_filename' => 'alexa.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Respberry PI',
          'image_filename' => 'respberry_pi.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stacks')->insert([
          'name' => 'Python',
          'image_filename' => 'python.png',
          'created_at' => date('Y-m-d H:i:s'),
      ]);
    }
}
