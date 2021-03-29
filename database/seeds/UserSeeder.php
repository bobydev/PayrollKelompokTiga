<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create([
            'name' => 'Annisa_11190531',
            'email' => '11190531@bsi.ac.id',
            'password' => bcrypt('kelompok2'),
        ]);

        $admin = User::create([
            'name' => 'Boby_11190071',
            'email' => '11190071@bsi.ac.id',
            'password' => bcrypt('kelompok2'),
        ]);

        $admin = User::create([
            'name' => 'Farroh_11190372',
            'email' => '11190372@bsi.ac.id',
            'password' => bcrypt('kelompok2'),
        ]);

        $admin = User::create([
            'name' => 'Hasti_11190919',
            'email' => '11190919@bsi.ac.id',
            'password' => bcrypt('kelompok2'),
        ]);

        $admin = User::create([
            'name' => 'Vera_11191154',
            'email' => '11191154@bsi.ac.id',
            'password' => bcrypt('kelompok2'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'KelompokDua',
            'email' => 'kelompok2@bsi.ac.id',
            'password' => bcrypt('kelompok2'),
        ]);

        $user->assignRole('user');
    }
}
