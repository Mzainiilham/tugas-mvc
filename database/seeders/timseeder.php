<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class timseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tims')->insert([
          'nim'=>'204855076',
          'nama'=>'zaini ilham',
          'alamat'=>'lombik timur',
          'jurusan'=>'teknik informatika',
        ]);
    }
}
