<?php

namespace App\Policies;

use App\User;
use App\Site;
use Illuminate\Auth\Access\HandlesAuthorization;

class SitePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the site.
     * 确定用户是否有权限查看站点
     * @param  \App\User  $user
     * @param  \App\Site  $site
     * @return mixed
     */
    public function view(User $user, Site $site)
    {
        //
    }

    /**
     * Determine whether the user can create sites.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the site.
     *
     * @param  \App\User  $user
     * @param  \App\Site  $site
     * @return mixed
     */
    public function update(User $user, Site $site)
    {
        //
    }

    /**
     * Determine whether the user can delete the site.
     *
     * @param  \App\User  $user
     * @param  \App\Site  $site
     * @return mixed
     */
    public function delete(User $user, Site $site)
    {
        //
    }
}
