<?php

use Illuminate\Database\Seeder;
use \App\Utils\ProductTypeUtil;
use \App\Utils\ProductSourceUtil;

class ShipmentFitSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'title' => ['en' => 'Backpack', 'ar' => 'حقيبة ظهر'],
                'icon' => 'fas fa-backpack'
            ],
            [
                'id' => 2,
                'title' => ['en' => 'Carry On', 'ar' => 'شنطة محمولة'],
                'icon' => 'fas fa-suitcase-rolling'
            ],
            [
                'id' => 3,
                'title' => ['en' => 'Check in', 'ar' => 'شنطة علي الطائرة'],
                'icon' => 'fas fa-suitcase'
            ]
        ];
        foreach ($data as $datum) {
            \App\Models\ShipmentFit::create($datum);
        }
    }
}
