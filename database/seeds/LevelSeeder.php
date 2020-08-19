<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//esto ya no es necesario si se trabaja con factory

class LevelSeeder extends Seeder//Extiende se Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()//esta funcion se ejecuta para sembrar datos
    {   
        /**Utilizando un Factory: Un factory usa un modelo para crear registro en la bd 
           * crear un nuevo factory: php artisan make:factory LevelFactory --model=Level
          */
        $levels=[
                'Bronce',
                'Silver',
                'Gold',
                'Platinum',
                'Diamond',
                'Master'
             ];
        foreach($levels as $level){
            //Se hara uso del factory creado correspondiente
            factory(App\Level::class)->create([  //create() incerta los datos en la bd
            'name' => $level,  //Aqui se declaron los datos por default que querramos que se registren en la bd
            ]);
        }
       

        /**
        * $levels=[
        *    'Bronce',
        *    'Plata',
        *    'Oro',
        *    'Diamante',
        *   'Maestro'
        * ];
        
         * 1ra Forma:
         * foreach($levels as $level){
         *   DB::table('levels')->insert([   //se indica el nombre de la tabla y se inserta con insert()
         *       'name'=>$level,  //Se insertara en el campo name el valor de la posision de $level
         *       'created_at'=>now(),
         *       'updated_at'=>now()
         *   ]);
         *   }
         */
        
         /**
          * 2da Forma:
          * foreach($levels as $level){
          *  $newLevel=new App\Level(); //creamos un nuevo level
          *  $newLevel->name=$level; //se asigna al campo name el valor de la posision $level
          *  $newLevel->save(); // se guardan los cambios
          *  }
          */
         
          
        
    }
}
