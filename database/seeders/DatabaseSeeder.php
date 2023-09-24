<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Storage::makeDirectory("public/categories");
        Storage::makeDirectory("public/subcategories");
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
    }
}