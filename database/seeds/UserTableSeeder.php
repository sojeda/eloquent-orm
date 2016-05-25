<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
        	'name' => 'Sergio Ojeda',
        	'gender' => 'm'
        	]);
        factory(User::class,99)->create();
    }
}
