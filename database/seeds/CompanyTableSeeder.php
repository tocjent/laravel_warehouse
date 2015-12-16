<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();

        App\Core\Company\Company::create([
            'name' => 'Bitgrind',
            'NIP' => '5249125538',
            'address_id' => App\Core\Address::all()->first()->id
        ]);
    }
}
