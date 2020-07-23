<?php

use App\User;
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
      User::create([
        'name' => 'Bryan',
        'email' => 'wertty0831@gmail.com',
        'password' => bcrypt('zmqp0831')
      ]);

      factory(User::class, 10)->create();
    }
}
