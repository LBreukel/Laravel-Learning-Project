<?php

use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Material::class, 1)->create(['name' => 'Black Crystal',
            'description' => 'A gatherable natural ingredient that has been processed and may be used during crafting. 
            It can be changed to a different form through alchemy or processing.
            – How to Obtain: Use Heating in the Processing window (L) on Rough Black Crystal x5.']);

        factory(App\Material::class, 1)->create(['name' => 'Black Seed',
            'description' => 'Description:Nobody knows what this seed will grow into.You can begin Farming after using a Fence to create a garden. 
            Note that this plant will take up 1 grid in a garden.– How to Obtain: It can be purchased from aSeed Vendor.']);

    }
}
