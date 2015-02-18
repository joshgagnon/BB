
<?php

class UserSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'email'    => 'b.grant@xtra.co.nz',
        'password' => Hash::make('bookings'),
    ));
}

}