<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Entrust\Role;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use EntrustUserTrait;

    public function run()
    {

        $roles = ['root', 'admin', 'student', 'qr'];

        foreach ($roles as $role) {

            $owner = new App\Model\Entrust\Role();
            $owner->name = $role;
            $owner->display_name = $role;
            $owner->description = $role;
            $owner->save();

        }

    }
}
