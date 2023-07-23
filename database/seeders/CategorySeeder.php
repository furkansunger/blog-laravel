<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0 ; $i<5;$i++){
            Category::create([
                    "title"  => "example titlte $i",
                    "description"  => "example description $i",
                    "type"  => "ACTIVE",
                    "parent_id" => 0,
            ]);
        }
    }
}
