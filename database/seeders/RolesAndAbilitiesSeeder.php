<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;
use App\Models\User;

class RolesAndAbilitiesSeeder extends Seeder
{
    public function run()
    {
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);

        $manageUsers = Bouncer::ability()->firstOrCreate([
            'name' => 'manage-users',
            'title' => 'Manage users',
        ]);

        Bouncer::allow($admin)->to($manageUsers);

        
        $user = User::find(1);
        Bouncer::assign('admin')->to($user);
    }
}
