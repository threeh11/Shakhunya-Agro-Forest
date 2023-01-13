<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'phone' => '+7 (964) 863-78-78',
            'email' => 'kacija70@mail.ru',
            'naming' => 'ООО "Шахунья-Лес Агро"',
            'legal_address' => '424033, Республика Марий Эл, г Йошкар-Ола, ул Эшкинина, д. 25, помещ. IX',
            'OGRN' => '1115235000352',
            'INN' => '5239010173',
            'KPP' => '121501001',
            'date_reg' => '03.03.2011',
        ]);
    }
}
