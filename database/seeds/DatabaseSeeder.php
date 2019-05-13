<?php

use Illuminate\Database\Seeder;
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
        factory(User::class, [
            'name' => 'admin',
            'email' => env('APP_ENV')'admin@admin.com',
            'password' => bcrypt()
        ])->create();
    }
}
