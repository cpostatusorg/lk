<?php

use Illuminate\Database\Seeder;
use App\Model\Root\School;
use Carbon\Carbon;
use App\Model\Entrust\Role;
use App\Model\User;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class UsersTableSeeder extends Seeder
{
    use EntrustUserTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createStudents();
        $this->createAdmins();
        $this->createRoot();
        $this->createQr();
    }

    public function createStudents()
    {
        $schools = School::all();
        foreach ($schools as $school){
            for ($i = 1; $i <= 2; $i++) {
                    DB::table('users')->insert([
                    'name' => 'user_'.uniqid(),
                    'password' => bcrypt('secret'),
                    'school_table_id' => $school->id,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'fio' => 'text',
                    'parallel' => 'text',
                    'class' => 'text'
                    ]);
            }
        }

        $users = User::all();
        foreach ($users as $user){
            $role = Role::all()->where('name', 'student');
            $user->attachRole($role[2]);
        }
    }

    public function createAdmins()
    {
        $schools = School::all();
        foreach ($schools as $school){
            DB::table('users')->insert([
                'name' => 'admin_'.uniqid(),
                'password' => bcrypt('secret'),
                'school_table_id' => $school->id,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'fio' => 'text',
                'parallel' => 'text',
                'class' => 'text',
                'card_table_id' => -1
            ]);
        }

        $users = User::all();
        foreach ($users as $user){
            if( substr($user->name,0,5) == 'admin' ){
                $role = Role::all()->where('name', 'admin');
                $user->attachRole($role[1]);
            }
        }
    }

    public function createRoot()
    {
        DB::table('users')->insert([
            'name' => 'root',
            'password' => bcrypt('secret'),
            'school_table_id' => 999,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'fio' => 'text',
            'parallel' => 'text',
            'class' => 'text',
            'card_table_id' => -1
        ]);

        $users = User::all();
        foreach ($users as $user){
            if( $user->name == 'root' ){
                $role = Role::all()->where('name', 'root');
                $user->attachRole($role[0]);
            }
        }
    }

    public function createQr()
    {
        DB::table('users')->insert([
            'name' => 'qr',
            'password' => bcrypt('secret'),
            'school_table_id' => 998,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'fio' => 'text',
            'parallel' => 'text',
            'class' => 'text',
            'card_table_id' => -1
        ]);

        $users = User::all()->where('name', 'qr');
        $role = Role::all()->where('name', 'qr');
        foreach ($users as $user){
            $user->attachRole($role[3]);
        }

    }
}
