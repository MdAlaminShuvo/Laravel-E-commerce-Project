<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Samsung Galaxy S21',
                'price' => '1000',
                'description' => 'A smartphone with 8gb ram and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://fdn2.mobgsm.com/vv/bigpic/samsung-galaxy-s21-5g-r.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S21 Ultra',
                'price' => '1200',
                'description' => 'A smartphone with 12gb ram and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://diamu.com.bd/wp-content/uploads/2021/03/Samsung-Galaxy-S21-Black.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S21 Plus',
                'price' => '1100',
                'description' => 'A smartphone with 10gb ram and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://images.samsung.com/za/smartphones/galaxy-s21/buy/s21_family_kv_mo_img.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S21 Ultra',
                'price' => '1200',
                'description' => 'A smartphone with 12gb ram and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/s21feteaser.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S21 Ultra',
                'price' => '1200',
                'description' => 'A smartphone with 12gb ram and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/s21feteaser.jpg',
            ],
        ]);
    }
}
