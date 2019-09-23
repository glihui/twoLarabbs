<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    public function saving(User $user)
    {
        // 这样写扩展性更高，只有空的时候才指定默认头像
        if (empty($user->avatar)) {
            $user->avatar = 'http://bbs.guolh.com/uploads/images/avatars/201909/24//4_1569255094_qFvDuJmYo7.jpg';
        }
    }
}
