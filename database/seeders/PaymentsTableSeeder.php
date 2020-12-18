<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
        	'payments_name' => 'BCA'
        ]);

        DB::table('payments')->insert([
        	'payments_name' => 'BNI'
        ]);

        DB::table('payments')->insert([
        	'payments_name' => 'BTN'
        ]);
    }
}
