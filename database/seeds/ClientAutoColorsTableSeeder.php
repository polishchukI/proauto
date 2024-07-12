<?php

use Illuminate\Database\Seeder;

class ClientAutoColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client_auto_colors')->delete();
        
        \DB::table('client_auto_colors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Черный',
                'code' => 'NH',
                'manufacturer' => 'hyundai',
                'type' => 'Lack',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Белый',
                'code' => '139',
                'manufacturer' => 'renault',
                'type' => 'acril',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Бежевый',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Желтый',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Желтый',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Зеленый',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Коричневый',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Красный',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Оранжевый',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Серый',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Синий',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Фиолетовый',
                'code' => '',
                'manufacturer' => '',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}