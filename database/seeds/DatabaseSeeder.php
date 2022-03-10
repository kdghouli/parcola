<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 10)->create();
        $agences=factory(App\Agence::class,6)->create();
        $categories=factory(App\Categorie::class,4)->create();
        factory(App\Vhl::class, 100)->make()->each(function ($vhl) use($agences){
            $vhl->agence_id=$agences->random()->id;
            $vhl->save();
        });
            }
}
