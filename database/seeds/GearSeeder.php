<?php

use Illuminate\Database\Seeder;

class GearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Gear items
        factory(App\Gearitem::class, 1)->create(['name'=> 'Kzarka Gauntlet',
            'gearstats'=> '2',
            'category'=> '3',
            'gearset'=> '1',
            'attribute'=> '5',
            'guidenumber'=> '11']);

        factory(App\Gearitem::class, 1)->create(['name'=> 'Kutum Vambrace',
            'gearstats'=> '3',
            'category'=> '3',
            'gearset'=> '2',
            'attribute'=> '9',
            'guidenumber'=> '12']);

        factory(App\Gearitem::class, 1)->create(['name'=> 'Dandelion Gardbrace',
            'gearstats'=> '7',
            'category'=> '3',
            'gearset'=> '3',
            'attribute'=> '1',
            'guidenumber'=> '13']);

        factory(App\Gearitem::class, 1)->create(['name'=> 'Bheg\'s Gloves',
            'gearstats'=> '5',
            'category'=> '3',
            'gearset'=> '4',
            'attribute'=> '12',
            'guidenumber'=> '14']);

        factory(App\Gearitem::class, 1)->create(['name'=> 'Ring of Power',
            'gearstats'=> '9',
            'category'=> '3',
            'gearset'=> '5',
            'attribute'=> '2',
            'guidenumber'=> '15']);
    }
}
