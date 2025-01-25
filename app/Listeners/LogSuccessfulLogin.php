<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Log;

class LogSuccessfulLogin
{
    public function handle(Login $event)
    {
        Log::info('User logged in: ' . $event->user->name . ' ' . $event->user->lastname);
    }
}