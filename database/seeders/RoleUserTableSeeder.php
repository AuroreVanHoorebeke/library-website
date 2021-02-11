<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO check why method not found
        User::findOrFail(1)->roles()->attach(1);
        User::findOrFail(2)->roles()->attach(2);
    }
}
