<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    protected $signature = 'user:create';

    protected $description = 'Create a new user';

    public function handle()
    {
        $name     = $this->ask('Enter the user name');
        $email    = $this->ask('Enter the user email');
        $password = $this->secret('Enter the user password');

        $user = User::create([
            'name'     => $name,
            'email'    => $email,
            'password' => Hash::make($password),
        ]);

        $token = $user->createToken('api-token')->plainTextToken;

        $this->info('User created successfully.');
        $this->info('Bearer token: ' . $token);

        $user->save();
    }
}
