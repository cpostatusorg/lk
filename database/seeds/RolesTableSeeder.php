<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
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

        $roles = ['roots', 'admins', 'student'];

        foreach ($roles as $role) {

            DB::table('users')->insert([
                'name' => $role,
                'email' => $role.'@mail.ru',
                'password' => bcrypt('secret')
            ]);

            $owner = new Role();
            $owner->name = $role;
            $owner->display_name = $role;
            $owner->description = $role;
            $owner->save();

            $user = User::where('name', '=', $role)->first();
            $user->attachRole($owner);

        }

    }
}
