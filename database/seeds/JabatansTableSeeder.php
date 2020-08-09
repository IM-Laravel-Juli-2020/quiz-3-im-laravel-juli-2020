<?php

use Illuminate\Database\Seeder;

class JabatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans')->insert([
            "id" => 1,
            "nama" => "Staff",
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s")
        ]);
        DB::table('jabatans')->insert([
            "id" => 2,
            "nama" => "Manager",
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s")
        ]);
    }
}
