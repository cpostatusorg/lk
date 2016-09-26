<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = file('database/seeds/schools.txt');
        foreach ($files as $file) {

            DB::table('schools')->insert([
                'name' => $file,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

        }
    }
}
