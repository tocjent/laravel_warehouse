<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->delete();

        App\Core\Address::create([
            'street' => 'Zegarynki 14B',
            'postalCode' => '03-020',
            'city' => 'Warszawa'
        ]);
    }
}
