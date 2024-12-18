<?php

namespace App\Providers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\User;
use App\Models\Lapangan; // Tambahkan model Lapangan


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

     public function boot()
    {
        // Fetch the roles from the database
        $roles = Role::all(); // Fetching all roles from the database
        $users = User::all(); // Fetching all users from the database
        $lapangans = Lapangan::all(); // Fetching all lapangans from the database

        // Share the roles, users, and lapangans with all views
        view()->share('roles', $roles);
        view()->share('users', $users);
        view()->share('lapangans', $lapangans); // Sharing the lapangans globally
    }

}
