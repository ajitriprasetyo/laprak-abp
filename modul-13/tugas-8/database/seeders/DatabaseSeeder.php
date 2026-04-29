<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat Akun Admin Default
        if (!User::where('email', 'admin@esteh.com')->exists()) {
            User::create([
                'name' => 'Admin Esteh',
                'email' => 'admin@esteh.com',
                'password' => Hash::make('password'),
            ]);
        }

        $menus = [
            [
                'menu_code' => 'ET-001',
                'name' => 'Es Teh Original',
                'category' => 'Es Teh Original',
                'price' => 3000,
                'stock' => 100,
                'image_url' => '',
                'description' => 'Es teh manis segar khas.',
            ],
            [
                'menu_code' => 'ET-002',
                'name' => 'Es Teh Lemon',
                'category' => 'Es Teh Buah',
                'price' => 5000,
                'stock' => 50,
                'image_url' => '',
                'description' => 'Es teh dengan irisan lemon segar.',
            ],
        ];

        foreach ($menus as $menu) {
            if (!\App\Models\Menu::where('menu_code', $menu['menu_code'])->exists()) {
                \App\Models\Menu::create($menu);
            }
        }
    }
}
