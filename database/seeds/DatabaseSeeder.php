<?php

use App\User;
use App\Poeme;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class, 10)->create()->each(function ($user) {
            $user->poemes()->save(factory(Poeme::class)->make());
        });
    }
}
