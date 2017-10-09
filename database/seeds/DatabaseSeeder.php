<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('obras')->insert(             	
             	['nombre'=>'obra1','url'=>'imagenes/obras/obra1.jpg','comentario'=>'','museo_id'=>1]);
    	DB::table('obras')->insert(             	
             	['nombre'=>'obra2','url'=>'imagenes/obras/obra2.jpg','comentario'=>'','museo_id'=>1]);
    	DB::table('obras')->insert(             	
             	['nombre'=>'obra3','url'=>'imagenes/obras/obra3.jpg','comentario'=>'','museo_id'=>1]);
    	DB::table('obras')->insert(             	
             	['nombre'=>'obra4','url'=>'imagenes/obras/obra4.jpg','comentario'=>'','museo_id'=>1]);
    	DB::table('obras')->insert(             	
             	['nombre'=>'obra5','url'=>'imagenes/obras/obra5.jpg','comentario'=>'','museo_id'=>1]);
    	DB::table('obras')->insert(             	
             	['nombre'=>'obra6','url'=>'imagenes/obras/obra6.jpg','comentario'=>'','museo_id'=>1]);

    }
}
