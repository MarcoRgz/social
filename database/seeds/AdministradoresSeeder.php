<?php

use Illuminate\Database\Seeder;

class AdministradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 'admin', 3)->create();
      factory(App\User::class, 12)->create();
    }
}
