<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gigamike.net',
            'password' => Hash::make('g!g@m!ke187'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Member',
            'email' => 'member@gigamike.net',
            'password' => Hash::make('g!g@m!ke187'),
            'role_id' => 2,
        ]);
    }
}
