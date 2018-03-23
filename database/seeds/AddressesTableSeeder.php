<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('addresses')->insert([
            'name' => 'home address',
            'city'=>'Kharkiv',
            'area'=>'Some area',
            'house'=>'6',
            'info'=>'asdasdasd',
        ]);
           DB::table('addresses')->insert([
            'name' => 'Work address',
            'city'=>'Kharkiv',
            'area'=>'Some area',
            'house'=>'61',
            'info'=>'asdasdasd',
        ]);
             DB::table('addresses')->insert([
            'name' => 'Game address',
            'city'=>'Kharkiv',
            'area'=>'Some area',
            'house'=>'1',
            'info'=>'asdasdasd',
        ]);
    }
}
