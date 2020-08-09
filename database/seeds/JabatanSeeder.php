<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->insert([
            [
                'role_name' => 'Manager',
                'desc' => 'Mandor atau penanggung jawab proyek'
            ],
            [
                'role_name' => 'Staff',
                'desc' => 'Workforce dari suatu proyek'
            ]
        ]);
    }
}
