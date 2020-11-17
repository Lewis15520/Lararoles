<?php

namespace Lewis15520\Lararoles\Traits;

Trait Relationships
{

    public function roles()
    {
        return $this->belongsToMany(
            \Lewis15520\Lararoles\app\Models\Role::class,
            'lararoles_role_user',
            'user_id',
            'role_id'
        );
    }

}
