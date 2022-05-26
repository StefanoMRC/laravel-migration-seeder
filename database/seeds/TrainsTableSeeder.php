<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train= new Train();

        $train->azienda='Trenitalia';
        $train->stazione_di_partenza='Roma';
        $train->stazione_di_arrivo='Verona';
        $train->orario_partenza='12:00';
        $train->orario_arrivo='14:30';
        $train->data_partenza='2022-05-26';
        $train->codice_treno='AM495887';
        $train->numero_carrozze=9;
        $train->in_orario=false;
        $train->cancellato=false;
        $train->save();
    }
}
