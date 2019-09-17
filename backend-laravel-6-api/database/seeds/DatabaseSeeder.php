<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create('fr_FR');
        // for ($i = 0; $i < 100; $i++) {
        //     $product = new Product;
        //     $product->title = $faker->sentence(5);
        //     $product->description = $faker->paragraph();
        //     $product->save();
        // }
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@test.com',
        //     'password' => Hash::make('admin'),
        //     'role' => 2
        // ]);
        // User::create([
        //     'name' => 'User',
        //     'email' => 'user@test.com',
        //     'password' => Hash::make('user'),
        //     'role' => 1
        // ]);
        factory(App\customers::class, 50)->create();
    }
}
