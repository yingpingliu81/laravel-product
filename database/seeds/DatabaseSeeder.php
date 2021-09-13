<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdminAccount();

    }

    private function createAdminAccount() {
        User::firstOrCreate(
            [
                'email' => 'louis.liu@ptv.com.au',
            ],
            [
                'name' => 'Louis Liu',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'permission' => 2,
                'password' => \Illuminate\Support\Facades\Hash::make(config('app.admin_login_init_password'))
            ]
        );

        User::firstOrCreate(
            [
                'email' => 'glenn.murphy@ptv.com.au',
            ],
            [
                'name' => 'glenn murphy',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'permission' => 2,
                'password' => \Illuminate\Support\Facades\Hash::make(config('app.admin_login_init_password'))
            ]
        );
    }




}
