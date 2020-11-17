<?php

namespace Lewis15520\Lararoles\app\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    protected $table    = 'lararoles_permissions';
    protected $fillable = ['name', 'display_name', 'description'];

}
