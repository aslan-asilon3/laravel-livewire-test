<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Datamember;

class DatamemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Datamember::create([

            'id_member' => '111',

            'no_hp' => '085290345',

        ]);
        
        Datamember::create([

            'id_member' => '222',

            'no_hp' => '08874936',

        ]);
        
        Datamember::create([

            'id_member' => '333',

            'no_hp' => '085290345',

        ]);
        

    }
}
