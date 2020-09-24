<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Str;


class UsernameGeneratorService
{
  
    public function setUsername($name, $id = 0)
    {
        // Normalize the name
        $username =  Str::slug($name, '');
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allUsernames = $this->getRelatedUsernames($username, $id);
        // If we haven't used it before then we are all good.
        if (!$allUsernames->contains('username', $username)) {
            return $username;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newUsername = $username . '' . $i;
            if (!$allUsernames->contains('username', $newUsername)) {
                return $newUsername;
            }
        }
        throw new \Exception('Can not create a unique username');
    }

    protected function getRelatedUsernames($username, $id = 0)
    {
        return User::select('username')->where('username', 'like', $username . '%')
            ->where('id', '<>', $id)
            ->get();
    }

}