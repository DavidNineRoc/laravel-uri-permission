<?php

namespace DavidNineRoc\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('permission.table_names.permissions'));
    }

    public function roles()
    {
        return $this->belongsToMany(
            config('permission.models.role'),
            config('permission.table_names.role_has_permissions'),
            'permission_id',
            'role_id'
        );
    }
}
