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
        factory(App\User::class, 1)->create(['name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234')])
            ->each(function (User $user){
                $user->assignRole('admin');
            });
    }
}
