<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawan')->insert([
            [
                'name' => 'Paijo',
                'role_id' => 1
            ],
            [
                'name' => 'Paijol',
                'role_id' => 2,
                'atasan_id' =>1
            ],[
                'name' => 'Suminten',
                'role_id' => 2,
                'atasan_id' =>1
            ],[
                'name' => 'Salam',
                'role_id' => 2,
                'atasan_id' =>1
            ],
        ]);
    }
}
