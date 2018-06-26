<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{


    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}