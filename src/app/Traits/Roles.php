<?php

namespace Lewis15520\Lararoles\Traits;

use Lewis15520\Lararoles\app\Models\Role;

Trait Roles
{

    public function hasRole(string $name): bool
    {
        foreach ($this->roles as $role) {
            if ($role->name === $name)
                return true;
        }
        return false;
    }

    public function hasRoles(array $names, bool $requireAll = false): bool
    {
        $rolesFound = [];
        foreach ($names as $name) {
            if ($this->hasRole($name))
                $rolesFound[] = $name;
        }
        if ((! $requireAll && count($rolesFound) > 0) || ($requireAll && count($names) === count($rolesFound)))
            return true;
        return false;
    }

}
