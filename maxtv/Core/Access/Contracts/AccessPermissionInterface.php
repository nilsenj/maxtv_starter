<?php namespace Core\Access\Contracts;

/**
 * This file is part of Access,
 * a role & permission management solution for Syrinx.
 *
 * @license MIT
 * @package Core\Access
 */

interface AccessPermissionInterface
{
    
    /**
     * Many-to-Many relations with role model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles();
}
