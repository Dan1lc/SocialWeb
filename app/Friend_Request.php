<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Friend_Request extends Model
{
    public function getUser()
    {
        $user=User::find($this->from_id);
        return $user;
    }
}
