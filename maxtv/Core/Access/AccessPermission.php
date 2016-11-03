<?php namespace Core\Access;

/**
 * This file is part of Access,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Core\Access
 */

use Core\Access\Contracts\AccessPermissionInterface;
use Core\Access\Traits\AccessPermissionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class AccessPermission extends Model implements AccessPermissionInterface
{
    use AccessPermissionTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('access.permissions_table');
    }

}
