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
        Bouncer::assign('admin')->to($admin);


        $headmaster = User::create([
            'name' => 'headmaster',
            'email' => 'headmaster@example.com',
            'password' => Hash::make('headmaster'),
        ]);

        $professor = User::create([
            'name' => 'professor',
            'email' => 'professor@example.com',
            'password' => Hash::make('professor'),
        ]);


        $student = User::create([
            'name' => 'student',
            'email' => 'student@example.com',
            'password' => Hash::make('student'),
        ]);



        // Dodela uloge 'admin' korisniku
        Bouncer::assign('admin')->to($admin);
        Bouncer::assign('headmaster')->to($headmaster);
        Bouncer::assign('professor')->to($professor);
        Bouncer::assign('student')->to($student);

        //Bouncer::allow('admin')->to('assign', 'headmaster');

        Bouncer::allow('admin')->to(['edit-users', 'delete-users']);
        Bouncer::allow('headmaster')->to(['edit-users', 'delete-users']);
    }
}
