<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Silber\Bouncer\BouncerFacade as Bouncer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = Bouncer::role()->findOrCreateRoles(['admin', 'headmaster', 'professor', 'student']);
        // Kreiranje admina
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
        ]);

        // Dodela uloge 'admin' korisniku
        Bouncer::assign('admin')->to($admin);
    }
}
