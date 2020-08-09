<?php

use Illuminate\Database\Seeder;

class KaryawansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawans')->insert([
            "id" => 1,
            "nama" => "amernia",
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s"),
            "jabatan_id" => 1
        ]);
        DB::table('karyawans')->insert([
            "id" => 2,
            "nama" => "aufrida",
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s"),
            "jabatan_id" => 2
        ]);
    }
}
