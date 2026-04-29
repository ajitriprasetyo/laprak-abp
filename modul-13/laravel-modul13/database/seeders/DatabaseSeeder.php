<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat User untuk Login
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin Praktikum',
                'password' => Hash::make('password123'),
            ]
        );

        // Buat Dummy Data Produk
        $product1 = Product::create([
            'name' => 'Honda Vario 160',
            'price' => 27350000
        ]);

        $product2 = Product::create([
            'name' => 'Yamaha NMAX 155',
            'price' => 32675000
        ]);

        // Buat Dummy Data Variant untuk Product 1 (Honda Vario)
        Variant::create([
            'product_id' => $product1->id,
            'name' => 'Vario 160 CBS',
            'description' => 'Varian standar dengan sistem pengereman CBS.',
            'mesin' => '157cc, Liquid Cooled',
            'fitur' => 'Smart Key System | LED Headlight',
        ]);

        Variant::create([
            'product_id' => $product1->id,
            'name' => 'Vario 160 ABS',
            'description' => 'Varian tertinggi dengan pengereman ABS.',
            'mesin' => '157cc, Liquid Cooled',
            'fitur' => 'ABS | Smart Key System | USB Charger',
        ]);

        // Buat Dummy Data Variant untuk Product 2 (Yamaha NMAX)
        Variant::create([
            'product_id' => $product2->id,
            'name' => 'NMAX 155 Standard',
            'description' => 'Motor matic bongsor dengan performa unggul.',
            'mesin' => '155cc, Blue Core',
            'fitur' => 'VVA | Stop & Start System',
        ]);
    }
}
