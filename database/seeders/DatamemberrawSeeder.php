<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Datamemberraw;

class DatamemberrawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Datamemberraw::create([

            'id_member' => '111',

            'no_hp' => '085290345',

            'status_cek_data' => '1',

        ]);
        
        Datamemberraw::create([

            'id_member' => '222',

            'no_hp' => '085290',

            'status_cek_data' => '1',

        ]);
        
        Datamemberraw::create([

            'id_member' => '333',

            'no_hp' => '08529035',

            'status_cek_data' => '1',

        ]);
    }
}
