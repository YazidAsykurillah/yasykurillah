<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Portfolio;

class PortfolioPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }

    public function view(User $user, Portfolio $portfolio): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }

    public function update(User $user, Portfolio $portfolio): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }

    public function delete(User $user, Portfolio $portfolio): bool
    {
        return $user->hasPermissionTo('manage_projects');
    }
}
