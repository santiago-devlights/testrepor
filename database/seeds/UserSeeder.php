<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$profession = DB::select('SELECT id FROM professions WHERE title = ?', ["Desarrollador back-end"]);
        //dd($profession[0]->id);

        //$profession = DB::table('professions')->select('id')->take(1)->get();
//        $profession = DB::table('professions')
//            ->select('id')
//            ->where('title','=','Desarrollador back-end')
//            ->first();

        $professionId = Profession::where('title','Desarrollador back-end')->value('id');
//        $professionId = DB::table('professions')
//           // ->where('title','=','Desarrollador back-end')
//            ->whereTitle('Desarrollador back-end')
//            ->value('id');




        //dd($profession);
//        DB::table('users')->insert([
//            'name' => 'Duilio Palacios',
//            'email' => 'santiacevedo@curso.com ',
//            'password' => bcrypt('laravel'),
//            'profession_id' => $professionId,
//        ]);

        //With eloquent
        User::create([
            'name' => 'Duilio Palacios',
            'email' => 'santiacevedo@curso.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id'=>$professionId,
        ]);

        factory(User::class,48)->create();

    }
}
