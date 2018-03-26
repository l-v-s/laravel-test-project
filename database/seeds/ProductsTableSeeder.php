<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert (
            array (
                [
                    'name' => 'Ремни плоские',
                    'razdel' => '1',
                    'specification' => 'тех. характеристики',
                    'comment' => 'комменты',
                    'status' => '1'
                ],

                [
                'name' => 'Редукторы червячные',
                'razdel' => '2',
                'specification' => 'тех. характеристики',
                'comment' => 'комменты 2',
                'status' => '1'
            ],
                [
                    'name' => 'Моторредукторы',
                    'razdel' => '2',
                    'specification' => 'тех. характеристики',
                    'comment' => 'комменты',
                    'status' => '1'
                ],
            )
        );
    }
}
