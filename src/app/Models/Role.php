<?php

namespace Lewis15520\Lararoles\app\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table    = 'lararoles_roles';
    protected $fillable = ['name', 'display_name', 'description'];


    public function permissions()
    {
        return $this->belongsToMany(
            \Lewis15520\Lararoles\app\Models\Permission::class,
            'lararoles_permission_role',
            'role_id',
            'permission_id'
        );
    }

}
