<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(CustomTestSeeder::class);

        // $this->call(CategoryTableSeeder::class);
        // $this->call(SubCategoryTableSeeder::class);
        // $this->call(BrandTableSeeder::class);
        // $this->call(ProductTableSeeder::class);

        // $this->call(CouponTableSeeder::class);
        // $this->call(CustomerTableSeeder::class);
        // $this->call(SupplierTableSeeder::class);
        // $this->call(TagTableSeeder::class);
        // $this->call(TaxTableSeeder::class);
        // $this->call(ProductStockTableSeeder::class);
    }
}
