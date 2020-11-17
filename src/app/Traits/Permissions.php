<?php


namespace Lewis15520\Lararoles\Traits;


Trait Permissions
{

    public function hasPermission(string $name): bool
    {
        $permissions = [];
        foreach ($this->roles as $role) {
            foreach ($role->permissions as $permission) {
                $permissions[] = $permission;
            }
        }
        foreach ($permissions as $permission) {
            if ($permission->name === $name)
                return true;
        }
        return false;
    }

    public function hasPermissions(array $names, bool $requireAll = false): bool
    {
        $permissionsFound = [];
        foreach ($names as $name) {
            if ($this->hasPermission($name))
                $permissionsFound[] = $name;
        }
        if ((! $requireAll && count($permissionsFound) > 0) || ($requireAll && count($names) === count($permissionsFound)))
            return true;
        return false;
    }

}
