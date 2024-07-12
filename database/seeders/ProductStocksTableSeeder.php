<?php

use Illuminate\Database\Seeder;

class ProductStocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_stocks')->delete();
        
        \DB::table('product_stocks')->insert(array (
            0 => 
            array (
                'id' => 88,
                'product_id' => 33,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '3915d21f041ee8664d5bd5318c22723d',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 250.0,
                'total' => 250.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:34:06',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 89,
                'product_id' => 35,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'eb142059afed0ba0cc177a0c3bbce64d',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1850.0,
                'total' => 1850.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:34:06',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 90,
                'product_id' => 51,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '4a7160aea5d449301bc4f5a0fc1e434e',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 0.0,
                'total' => 0.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:07',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 91,
                'product_id' => 50,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '09f1880740f14847682c8e5366fb97d9',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 2300.0,
                'total' => 2300.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:14',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 92,
                'product_id' => 60,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '7696bebdf2772f159ff3fdd4eb0d89b0',
                'warehouse_id' => 1,
                'quantity' => 2,
                'currency' => 'RUB',
                'price' => 917.0,
                'total' => 1834.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 93,
                'product_id' => 59,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '398a30ea9c8e515b26ca392f9c024eeb',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1666.0,
                'total' => 1666.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 94,
                'product_id' => 74,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '1dd9ac8b02351951d64c363694a4b487',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1082.0,
                'total' => 1082.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:48',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 95,
                'product_id' => 63,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'e64fc172b24e9c133975a5a0f5b4a35c',
                'warehouse_id' => 1,
                'quantity' => 2,
                'currency' => 'RUB',
                'price' => 1496.0,
                'total' => 2992.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:53',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 96,
                'product_id' => 64,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'e97ad67729bdbf1dc71340f3805281cd',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1327.0,
                'total' => 1327.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:53',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 97,
                'product_id' => 62,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'c9b6df17b806632d34ff4726aaa67261',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1523.0,
                'total' => 1523.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:53',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 98,
                'product_id' => 65,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'af2ec3c0a799deab601161cd09d85484',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 798.0,
                'total' => 798.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:53',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 99,
                'product_id' => 66,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'cd5bb1500e2975c35c3d9501cb0dd524',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1256.0,
                'total' => 1256.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:35:57',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 100,
                'product_id' => 68,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '47dd357307a58822e44e68105722536a',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 2125.0,
                'total' => 2125.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:36:54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 101,
                'product_id' => 91,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '7965cb245cd2c874d35fe7d6b50940a6',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1700.0,
                'total' => 1700.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:37:33',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 102,
                'product_id' => 61,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '23c419f3082d5cbab4f10b8e4f8c4c9a',
                'warehouse_id' => 1,
                'quantity' => 2,
                'currency' => 'RUB',
                'price' => 2455.0,
                'total' => 4910.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:37:40',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 103,
                'product_id' => 67,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '2828f7c0239b05057b38132705837cc7',
                'warehouse_id' => 1,
                'quantity' => 3,
                'currency' => 'RUB',
                'price' => 7670.0,
                'total' => 23010.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:37:53',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 104,
                'product_id' => 78,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'ea499432e93ab817b494650e57f5ef73',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 400.0,
                'total' => 400.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:06',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 105,
                'product_id' => 83,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '21153aa134aef43e61c75e5e7a7383cd',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1290.0,
                'total' => 1290.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 106,
                'product_id' => 84,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'c91a37f0ede834be0ec16e8ccd18a9ca',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 990.0,
                'total' => 990.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 107,
                'product_id' => 85,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '7b8290a1af3ec23b9e6e0248b20484bb',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 670.0,
                'total' => 670.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 108,
                'product_id' => 86,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '824f293c32b47c41e5b8407bcc98d611',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 315.0,
                'total' => 315.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:13',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 109,
                'product_id' => 75,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '5826427526ae570621e26c7f3e0af0e9',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 960.0,
                'total' => 960.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 110,
                'product_id' => 76,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '6a5b55b1b1c27db4330d572be45845d3',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 960.0,
                'total' => 960.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 111,
                'product_id' => 77,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '3f4b2f7993bc4383e1b8d0c89e2c1214',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 970.0,
                'total' => 970.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 112,
                'product_id' => 90,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '8c375f4fd497f6100a15155dfac6e751',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 324.0,
                'total' => 324.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:35',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 113,
                'product_id' => 88,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'e178f66ffda9fa2e5afb472c8c373137',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 1136.0,
                'total' => 1136.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:35',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 114,
                'product_id' => 89,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '16b8b407c3be1ca5d740f08645a84ce6',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 940.0,
                'total' => 940.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:35',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 115,
                'product_id' => 94,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'cc115d7f39ed06dc8d91998ddc3bb32d',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 68.0,
                'total' => 68.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:43',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 116,
                'product_id' => 93,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '76b21f9e0de66957fbb8288a237e6e9f',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 396.0,
                'total' => 396.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:43',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 117,
                'product_id' => 92,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'ae473646fb58692051d96cfad976af6c',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 364.0,
                'total' => 364.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:49',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 118,
                'product_id' => 99,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => 'b0ab62ee0b9a5aa5d74fe421ba35db1e',
                'warehouse_id' => 1,
                'quantity' => 2,
                'currency' => 'RUB',
                'price' => 1200.0,
                'total' => 2400.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:57',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 119,
                'product_id' => 100,
                'doc_type' => 'receipt',
                'doc_id' => 0,
                'batch' => '48d3cf362231c3b299ecb99229ea8c7d',
                'warehouse_id' => 1,
                'quantity' => 1,
                'currency' => 'RUB',
                'price' => 5500.0,
                'total' => 5500.0,
                'currency_out' => NULL,
                'price_out' => NULL,
                'discount_out' => NULL,
                'total_out' => NULL,
                'finalized_at' => '2023-10-23 20:38:57',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 120,
                'product_id' => 66,
                'doc_type' => 'sale',
                'doc_id' => 24,
                'batch' => 'cd5bb1500e2975c35c3d9501cb0dd524',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 1256.0,
                'total' => 1256.0,
                'currency_out' => 'RUB',
                'price_out' => 1600.0,
                'discount_out' => NULL,
                'total_out' => 1600.0,
                'finalized_at' => '2023-10-23 21:12:32',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 121,
                'product_id' => 67,
                'doc_type' => 'sale',
                'doc_id' => 24,
                'batch' => '2828f7c0239b05057b38132705837cc7',
                'warehouse_id' => 1,
                'quantity' => -3,
                'currency' => 'RUB',
                'price' => 7670.0,
                'total' => 23010.0,
                'currency_out' => 'RUB',
                'price_out' => 9700.0,
                'discount_out' => NULL,
                'total_out' => 29100.0,
                'finalized_at' => '2023-10-23 21:12:32',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 122,
                'product_id' => 63,
                'doc_type' => 'sale',
                'doc_id' => 26,
                'batch' => 'e64fc172b24e9c133975a5a0f5b4a35c',
                'warehouse_id' => 1,
                'quantity' => -2,
                'currency' => 'RUB',
                'price' => 1496.0,
                'total' => 2992.0,
                'currency_out' => 'RUB',
                'price_out' => 1750.0,
                'discount_out' => NULL,
                'total_out' => 3500.0,
                'finalized_at' => '2023-10-23 21:13:32',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 123,
                'product_id' => 64,
                'doc_type' => 'sale',
                'doc_id' => 26,
                'batch' => 'e97ad67729bdbf1dc71340f3805281cd',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 1327.0,
                'total' => 1327.0,
                'currency_out' => 'RUB',
                'price_out' => 1400.0,
                'discount_out' => NULL,
                'total_out' => 1400.0,
                'finalized_at' => '2023-10-23 21:13:32',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 124,
                'product_id' => 62,
                'doc_type' => 'sale',
                'doc_id' => 26,
                'batch' => 'c9b6df17b806632d34ff4726aaa67261',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 1523.0,
                'total' => 1523.0,
                'currency_out' => 'RUB',
                'price_out' => 1900.0,
                'discount_out' => NULL,
                'total_out' => 1900.0,
                'finalized_at' => '2023-10-23 21:13:32',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 125,
                'product_id' => 61,
                'doc_type' => 'sale',
                'doc_id' => 26,
                'batch' => '23c419f3082d5cbab4f10b8e4f8c4c9a',
                'warehouse_id' => 1,
                'quantity' => -2,
                'currency' => 'RUB',
                'price' => 2455.0,
                'total' => 4910.0,
                'currency_out' => 'RUB',
                'price_out' => 3150.0,
                'discount_out' => NULL,
                'total_out' => 6300.0,
                'finalized_at' => '2023-10-23 21:13:32',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 126,
                'product_id' => 65,
                'doc_type' => 'sale',
                'doc_id' => 26,
                'batch' => 'af2ec3c0a799deab601161cd09d85484',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 798.0,
                'total' => 798.0,
                'currency_out' => 'RUB',
                'price_out' => 950.0,
                'discount_out' => NULL,
                'total_out' => 950.0,
                'finalized_at' => '2023-10-23 21:13:32',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 127,
                'product_id' => 33,
                'doc_type' => 'sale',
                'doc_id' => 19,
                'batch' => '3915d21f041ee8664d5bd5318c22723d',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 250.0,
                'total' => 250.0,
                'currency_out' => 'RUB',
                'price_out' => 300.0,
                'discount_out' => NULL,
                'total_out' => 300.0,
                'finalized_at' => '2023-10-23 21:14:26',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 128,
                'product_id' => 35,
                'doc_type' => 'sale',
                'doc_id' => 19,
                'batch' => 'eb142059afed0ba0cc177a0c3bbce64d',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 1850.0,
                'total' => 1850.0,
                'currency_out' => 'RUB',
                'price_out' => 2100.0,
                'discount_out' => NULL,
                'total_out' => 2100.0,
                'finalized_at' => '2023-10-23 21:14:26',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 129,
                'product_id' => 50,
                'doc_type' => 'sale',
                'doc_id' => 20,
                'batch' => '09f1880740f14847682c8e5366fb97d9',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 2300.0,
                'total' => 2300.0,
                'currency_out' => 'RUB',
                'price_out' => 3000.0,
                'discount_out' => NULL,
                'total_out' => 3000.0,
                'finalized_at' => '2023-10-23 21:14:41',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 130,
                'product_id' => 91,
                'doc_type' => 'sale',
                'doc_id' => 33,
                'batch' => '7965cb245cd2c874d35fe7d6b50940a6',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 1700.0,
                'total' => 1700.0,
                'currency_out' => 'RUB',
                'price_out' => 2400.0,
                'discount_out' => NULL,
                'total_out' => 2400.0,
                'finalized_at' => '2023-10-23 21:15:23',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 131,
                'product_id' => 90,
                'doc_type' => 'sale',
                'doc_id' => 32,
                'batch' => '8c375f4fd497f6100a15155dfac6e751',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 324.0,
                'total' => 324.0,
                'currency_out' => 'RUB',
                'price_out' => 400.0,
                'discount_out' => NULL,
                'total_out' => 400.0,
                'finalized_at' => '2023-10-23 21:15:29',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 132,
                'product_id' => 88,
                'doc_type' => 'sale',
                'doc_id' => 32,
                'batch' => 'e178f66ffda9fa2e5afb472c8c373137',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 1136.0,
                'total' => 1136.0,
                'currency_out' => 'RUB',
                'price_out' => 1400.0,
                'discount_out' => NULL,
                'total_out' => 1400.0,
                'finalized_at' => '2023-10-23 21:15:29',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 133,
                'product_id' => 89,
                'doc_type' => 'sale',
                'doc_id' => 32,
                'batch' => '16b8b407c3be1ca5d740f08645a84ce6',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 940.0,
                'total' => 940.0,
                'currency_out' => 'RUB',
                'price_out' => 1200.0,
                'discount_out' => NULL,
                'total_out' => 1200.0,
                'finalized_at' => '2023-10-23 21:15:29',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 134,
                'product_id' => 92,
                'doc_type' => 'sale',
                'doc_id' => 31,
                'batch' => 'ae473646fb58692051d96cfad976af6c',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 364.0,
                'total' => 364.0,
                'currency_out' => 'RUB',
                'price_out' => 500.0,
                'discount_out' => NULL,
                'total_out' => 500.0,
                'finalized_at' => '2023-10-23 21:15:34',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 135,
                'product_id' => 83,
                'doc_type' => 'sale',
                'doc_id' => 30,
                'batch' => '21153aa134aef43e61c75e5e7a7383cd',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 1290.0,
                'total' => 1290.0,
                'currency_out' => 'RUB',
                'price_out' => 1700.0,
                'discount_out' => NULL,
                'total_out' => 1700.0,
                'finalized_at' => '2023-10-23 21:15:40',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 136,
                'product_id' => 84,
                'doc_type' => 'sale',
                'doc_id' => 30,
                'batch' => 'c91a37f0ede834be0ec16e8ccd18a9ca',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 990.0,
                'total' => 990.0,
                'currency_out' => 'RUB',
                'price_out' => 1250.0,
                'discount_out' => NULL,
                'total_out' => 1250.0,
                'finalized_at' => '2023-10-23 21:15:40',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 137,
                'product_id' => 85,
                'doc_type' => 'sale',
                'doc_id' => 30,
                'batch' => '7b8290a1af3ec23b9e6e0248b20484bb',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 670.0,
                'total' => 670.0,
                'currency_out' => 'RUB',
                'price_out' => 850.0,
                'discount_out' => NULL,
                'total_out' => 850.0,
                'finalized_at' => '2023-10-23 21:15:40',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 138,
                'product_id' => 86,
                'doc_type' => 'sale',
                'doc_id' => 30,
                'batch' => '824f293c32b47c41e5b8407bcc98d611',
                'warehouse_id' => 1,
                'quantity' => -1,
                'currency' => 'RUB',
                'price' => 315.0,
                'total' => 315.0,
                'currency_out' => 'RUB',
                'price_out' => 400.0,
                'discount_out' => NULL,
                'total_out' => 400.0,
                'finalized_at' => '2023-10-23 21:15:40',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}