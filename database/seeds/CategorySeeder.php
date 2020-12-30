<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name' => 'electronics',
                'description' => 'Devices like mobile, laptops, tvs,...',
            ],
            [
                'id' => 2,
                'name' => 'computers',
                'description' => 'Computers',
                'parent_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'tv & video',
                'description' => 'TV & Video',
                'parent_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'cell Phones & accessories',
                'description' => 'Computers Accessories',
                'parent_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'clothing, shoes & jewelry',
                'description' => 'Clothing, Shoes & Jewelry'
            ],
            [
                'id' => 6,
                'name' => 'Pants',
                'description' => 'Pants',
                'parent_id' => 5
            ],
            [
                'id' => 7,
                'name' => 'shoes',
                'description' => 'Shoes',
                'parent_id' => 5
            ],
            [
                'id' => 8,
                'name' => 'shirts',
                'description' => 'shirts',
                'parent_id' => 5
            ],
        ];
        foreach ($data as $datum) {
            \App\Models\Category::create($datum);
        }
    }
}
