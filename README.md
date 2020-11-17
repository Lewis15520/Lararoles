# Lararoles - Work In Progress
 A package to add roles and permissions to laravel

## Requirements
- PHP 7.3 or later
- Laravel 8 or later

## Installation
In order to run Lararoles you are required to follow these steps in your terminal

1. Install the package with ```composer require lewis15520/lararoles```
2. Copy the required package conents with ```php artisan vendor:publish --provider="Lewis15520\Lararoles\app\Providers\LararolesServiceProvider"```
3. Install the package migrations with ```php artisan migrate```

## Usage
### Adding the trait
In your ```User``` model, add the following lines in the ```use``` cases: ```use Lewis15520\Lararoles\Traits;```. Then, inside the class, above the functions, add the following: ```use Lararoles;``` 

### Checking the roles and permissions
Anywhere around the application where you have a user object (including from the ```auth()->user()``` helper), you can add attach a series of functions to check roles and permissions. 

- hasRole: Usage "```$user->hasRole('roleName');```" | Definition "This will check for a singular role attached to this user."

- hasRoles: Usage "```$user->hasRoles(['role1Name', 'role2Name'], (optional) $requireAll = false);```" | Definition "This will check if atleast one of the roles given is attached to the user, unless the ```$requireAll``` variable is set to ```true```, then it will only pass if all the roles are attached to the user."

- hasPermission: Usage "```$user->hasPermission('permissionName';```" | Definition "This will check for a singular permission attached to this user through their attached roles."

- hasPermissions: Usage "```$user->hasPermissions(['permission1Name', 'permission2Name'], (optional) $requireAll = false);```" | Definition "This will check if atleast one of the permissions given is attached to one of the roles that the user is assigned to, unless the ```$requireAll``` variable is set to ```true```, then it will only pass if all the permissions are associated."
