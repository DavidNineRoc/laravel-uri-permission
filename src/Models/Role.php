<?php

namespace DavidNineRoc\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('permission.table_names.roles'));
    }

    public function permissions()
    {
        return $this->belongsToMany(
            config('permission.models.permission'),
            config('permission.table_names.role_has_permissions'),
            'role_id',
            'permission_id'
        );
    }

    public function users()
    {
        return $this->belongsToMany(
            config('permission.models.role'),
            config('permission.table_names.model_has_roles'),
            'role_id',
            'model_id'
        );
    }
}
