<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO check if permission attribution works correctly
        //Admin: user and Library edit access
        Role::find(1)->permissions()->attach([1]);

        //User: Read-only Library access (book list) and book borrowing service
        role::find(2)->permissions()->attach(2);
    }
}
