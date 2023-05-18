<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = new User;
        $user->name = "Dari Steef";
        $user->email = "test@yahoo.com";
        $user->password = bcrypt("Test");
        $user->username = "DSteef";
        $user->userType = "admin";
        $user->save();
    }
}
