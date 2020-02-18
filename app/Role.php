<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * relación many-to-many entre el modelo Role y el modelo User
     * @return type
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

}
