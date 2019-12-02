<?php

use Illuminate\Database\Seeder;

class CraftingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cooking items
        factory(App\Craftingitem::class, 1)->create(['name'=> 'Aloe Cookie',
            'attribute'=> '5 aloe, 7 dough, 3 honey, 4 sugar',
            'category'=> '6',
            'guidenumber'=> '1',
            'type_id'=> '1']);

        factory(App\Craftingitem::class, 1)->create(['name'=> 'Aloe Yogurt',
            'attribute'=> '5 aloe, 2 milk, 3 sugar',
            'category'=> '6',
            'guidenumber'=> '2',
            'type_id'=> '1']);

        factory(App\Craftingitem::class, 1)->create(['name'=> 'Assorted Side Dishes',
            'attribute'=> '1 fried bird, 2 seafood, 3 cheese',
            'category'=> '6',
            'guidenumber'=> '3',
            'type_id'=> '1']);

        factory(App\Craftingitem::class, 1)->create(['name'=> 'Beer',
            'attribute'=> '5 cereals, 6 water, 1 sugar',
            'category'=> '1',
            'guidenumber'=> '4',
            'type_id'=> '1']);

        factory(App\Craftingitem::class, 1)->create(['name'=> 'Borscht',
            'attribute'=> '7 jerky, 3 milk, 1 cinnamon',
            'category'=> '1',
            'guidenumber'=> '5',
            'type_id'=> '1']);

        //alchemy items
        factory(App\Craftingitem::class, 1)->create(['name'=> 'Antidote Elixir',
            'attribute'=> '1 wild grass, 2 blood, 3 oil',
            'category'=> '1',
            'guidenumber'=> '6',
            'type_id'=> '2']);

        factory(App\Craftingitem::class, 1)->create(['name'=> 'Clown\'s Blood',
            'attribute'=> '1 spirits leaf, 1 blood',
            'category'=> '3',
            'guidenumber'=> '7',
            'type_id'=> '2']);

        factory(App\Craftingitem::class, 1)->create(['name'=> 'Defense Elixir',
            'attribute'=> '5 blood, 3 purified water, 6 ash',
            'category'=> '4',
            'guidenumber'=> '8',
            'type_id'=> '2']);

        factory(App\Craftingitem::class, 1)->create(['name'=> 'Elixir of Life',
            'attribute'=> '5 blood, 3 small hp potion',
            'category'=> '8',
            'guidenumber'=> '9',
            'type_id'=> '2']);

        factory(App\Craftingitem::class, 1)->create(['name'=> 'Elixir of Seal',
            'attribute'=> '3 dwarf mushroom, 4 blood, 1 purified water',
            'category'=> '2',
            'guidenumber'=> '10',
            'type_id'=> '2']);

    }
}
