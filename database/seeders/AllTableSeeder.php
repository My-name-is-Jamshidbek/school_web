<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $teachers = [
            [
                'header' => 'ЗИЁ МАСКАНИГА САЁҲАТ',
                'description' => '
                    ИИВ Хоразм академик лицейида “Ватанга ва халққа садоқат билан хизмат қилиш – олий бурчимиз!” шиори остида ўтказилаётган “Маънавият ойлиги” доирасида кўплаб учрашувлар, давра суҳбатлари ўтказилиб, тарихий жойларга саёҳатлар ташкил этилмоқда.
                    Лицей ўқувчилари “Китобхонлик ҳафталиги” доирасида Маҳмуд Замахшарий номидаги Хоразм вилояти ахборот-кутубхона марказига ташриф буюришди. Марказ мутахассислари ўқувчиларга кутубхонада яратилган шароитлар, имкониятлар ҳамда адабиётлар тўғрисида маълумотлар беришди. 
                    Ўқувчилар тадбир давомида қизиқарли маълумотларга эга бўлиш билан бирга кутубхонага аъзо бўлишди ва ўзларини қизиқтирган саволларга жавоб олишди. 
                    
                    Беҳзод ҚУРЁЗОВ,
                    ИИВ Хоразм академик лицейи директори 
                    ўринбосари, подполковник.
                ',
                'img' => 'img_1.png'
            ],
        ];

        foreach ($teachers as $teacher) {
            DB::table('posts')->insert([
                'header' => $teacher['header'],
                'description' => $teacher['description'],
                'img' => $teacher['img'],
                'created_at' => now()
            ]);
        }
    }
}
