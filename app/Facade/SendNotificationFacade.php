<?php

namespace App\Facade;

use App\Models\User;
use App\Notifications\SendEmailNotification;
use App\Notifications\SendSmsNotification;
use App\Notifications\SendTelegramNotification;

class SendNotificationFacade
{

    public static function sendNotification(User $user)
    {
        $method = $user->method;
        $code = rand(1000, 9999);
        $user->update(['code' => $code]);

        switch ($method) {
            case 'sms':
                $user->notify(new SendSmsNotification($code));
                break;
            case 'email':
                $user->notify(new SendEmailNotification($code));
                break;
            case 'telegram':
                $user->notify(new SendTelegramNotification($code));
                break;
        }
    }
}
