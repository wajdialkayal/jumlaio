<?php

namespace App\Traits;


trait TwoFactorAuthenticatable
{
    public function generateTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = rand(100000, 999999);
        $this->two_factor_expires_at = now()->addMinutes(2);
        $this->save();
    }
    
    public function resetTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = null;
        $this->two_factor_expires_at = null;
        $this->save();
    }

    public function setTwoFactorAuth($value)
    {
        $this->two_factor_auth = $value;
        $this->save();
    }

}
