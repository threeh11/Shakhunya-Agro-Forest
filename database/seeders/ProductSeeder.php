<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Пиломатериал хвойных, лиственых пород',
            'description' => 'Пиломатериал хвойных,лиственых пород:обрезной, необрезной, полуобрезной, брус, лафет. Размеры от 0,25-250 см.',
            'path_to_images' =>
                'storage/Пиломатериал_хвойных_лиственых_пород_1.png' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_1.png' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_1.png',
        ]);

        DB::table('products')->insert([
            'name' => 'Кругляк',
            'description' => 'Иммеются: сосна, ель, береза, осина',
            'path_to_images' =>
                'storage/Пиломатериал_хвойных_лиственых_пород_1.png' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_2.jpg' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_3.jpeg',
        ]);

        DB::table('products')->insert([
            'name' => 'Поддоны',
            'description' => 'Иммеются: 800×1200, 1000×1200, 1140×1140, любой влажности!',
            'path_to_images' =>
                'storage/Пиломатериал_хвойных_лиственых_пород_1.png' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_2.jpg' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_3.jpeg',
        ]);

        DB::table('products')->insert([
            'name' => 'Сушка пиломатериала',
            'description' => 'Сушка пиломатериала в итальянских сушилках любой влажности по техусловиям заказчика.',
            'path_to_images' =>
                'storage/Пиломатериал_хвойных_лиственых_пород_1.jpg' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_2.jpg' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_3.jpeg',
        ]);

        DB::table('products')->insert([
            'name' => 'Черенки',
            'description' => 'Иммеются: береза-осина.',
            'path_to_images' =>
                'storage/Пиломатериал_хвойных_лиственых_пород_1.jpg' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_2.jpg' . ' ' .
                'storage/Пиломатериал_хвойных_лиственых_пород_3.jpeg',
        ]);
    }
}
