<?php

namespace App\Http\Controllers\Settings;

use App\Facade\SendNotificationFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\GetCodeRequest;
use App\Http\Requests\Settings\MethodRequest;
use App\Http\Requests\Settings\SettingsRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function isAuth()
    {
        return Auth::check();
    }

    public function method()
    {
        return view('settings.method');
    }

    public function userSettings()
    {
        $user = Auth::user();
        return view('settings.user', $user);
    }

    public function changeUserSettings(User $user, SettingsRequest $request)
    {
        $data = $request->validated();
        // Это фасад для упрощения взаимодействия с сервисами рассылки
        SendNotificationFacade::sendNotification($user);
        if ($data['code'] == $user->code) {
            $user->update(['settings' => $data]);
        }
        return redirect()->route('settings.user');
    }

    public function changeMethod(User $user, MethodRequest $request)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('settings.user');
    }


}
