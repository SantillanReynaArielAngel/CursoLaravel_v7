<?php

use Illuminate\Database\Seeder;
////de la doc:
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Se utiliza un arreglo para mandar todos los seeder a ejecutar que tengamos.
        //MUY IMPORTANTE: SE DEBE RESPETAR EL ORDEN DE LOS SEEDERS SEGUN LAS RESTRICIONES(dependencias) DE LLAVES(como en migraciones)
        $this->call([
            //LevelSeeder::class,
            //ImageSeeder::class,
            //TagSeeder::class,
            //TaggableSeeder::class,  //Falla
            //CategorieSeeder::class,
            //UserSeeder::class,         //falla
            //GroupSeeder::class,
            //ProfileSeeder::class,  //FALLA
            //LocationSeeder::class, //FALLA
            //VideoSeeder::class,    //Falla
            //PostSeeder::class,    //Falla
            CommentSeeder::class,    //Falla
            //GroupUserSeeder::class    //Falla
        ]);

        
    }
}


