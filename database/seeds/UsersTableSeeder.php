<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aUser = new User;
        $aUser->name = 'Ryan Farrell';
        $aUser->email = env('EMAIL');
        $aUser->email_verified_at = now();
        $aUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // hash 'password'
        $aUser->remember_token = Str::random(10);

        $aUser->save();

        factory(App\User::class, 4)->create();


    }
}
