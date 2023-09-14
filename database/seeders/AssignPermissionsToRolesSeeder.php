<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssignPermissionsToRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // therapist seed

        $user = User::create([
            'first_name' => 'Therapist',
            'last_name' => 'doe',
            'email' => 'therapist@therapist.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::where('name', 'therapist')->first();
        $permissions = Permission::whereIn('name', ['show-therapist-list', 'add-new-therapist', 'update-therapist', 'delete-therapist'])->pluck('id');
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        // screener seed

        $user = User::create([
            'first_name' => 'Screener',
            'last_name' => 'doe',
            'email' => 'screener@screener.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::where('name', 'screener')->first();
        $permissions = Permission::whereIn('name', ['show-screener-list', 'update-screener', 'delete-screener'])->pluck('id');
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        // Heralmelding seed

        // $user = User::create([
        //     'first_name' => 'Heralmelding',
        //     'last_name' => 'doe',
        //     'email' => 'heralmelding@heralmelding.com',
        //     'password' => bcrypt('123456')
        // ]);

        // $role = Role::where('name', 'heralmelding')->first();
        // $permissions = Permission::whereIn('name', [
        //     'show-heralmelding-list',
        //     'update-heralmelding',
        //     'delete-heralmelding',
        // ])->pluck('id');
        // $role->syncPermissions($permissions);
        // $user->assignRole([$role->id]);
    }
}
