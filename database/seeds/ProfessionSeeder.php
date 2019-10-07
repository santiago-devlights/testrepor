<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DIFE
        //DB::insert('INSERT INTO professions (title) VALUES ("Desarrollador back-end")');

        //DB::insert('INSERT INTO professions (title) VALUES (?)',['Desarrollador back-end']);

//        DB::insert('INSERT INTO professions (title) VALUES (:title)',['title' =>
//            'Desarrollador back-end',
//            ]);

//        DB::table('professions')->insert([
//           'title' => 'Desarrollador back-end'
//        ]);
//
//        DB::table('professions')->insert([
//            'title' => 'Disenador Web',
//        ]);
//
//        DB::table('professions')->insert([
//            'title'=> 'Desarrollador front-end',
//        ]);

        Profession::create([
            'title' => 'Desarrollador back-end',
        ]);

        Profession::create([
            'title' => 'Disenador Web',
        ]);

        Profession::create([
            'title'=> 'Desarrollador front-end',
        ]);

        factory(Profession::class,17)->create();


    }
}
