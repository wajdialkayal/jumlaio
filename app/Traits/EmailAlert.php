<?php

namespace App\Traits;

use App\Notifications\LoginAlertNotification;
use Jenssegers\Agent\Agent;

trait EmailAlert
{

    public function sendLoginAlert()
    {

        $agent = new Agent();
        $loginData = [
            'ip_address' => request()->ip(),
            'location' => \Location::get(request()->ip()),
            'device' => $agent->device(),
            'platform' => $agent->platform(),
            'browser' => $agent->browser(),
        ];

        $this->notify(new LoginAlertNotification($loginData));
    }

    
    public function setEmailAlert($value)
    {
        $this->email_alert = $value;
        $this->save();
    }
}
