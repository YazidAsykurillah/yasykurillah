<?php

namespace App\Policies;

use App\Models\User;
use App\Models\TechStack;

class TechStackPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('manage_projects'); // Reusing manage_projects or use a new one
    }

    public function view(User $user, TechStack $techStack): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }

    public function update(User $user, TechStack $techStack): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }

    public function delete(User $user, TechStack $techStack): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }
}
