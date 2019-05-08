<?php

namespace DavidNineRoc\Permission\Models\Traits;

use DavidNineRoc\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait PermissionRole
{
    /**
     * @return BelongsToMany
     */
    public function roles()
    {
        dd(static::class);
        return $this->belongsToMany(
            config('permission.models.role'),
            config('permission.table_names.model_has_roles'),
            'model_id',
            'role_id'
        )->where('model_type', static::class);
    }

    public function hasPermission(Permission $permission)
    {
        // 先查询出拥有的所有角色
        $permissionRoles = $permission->roles()->pluck('id');

        return $this->roles()->pluck('id')->intersect($permissionRoles)->isNotEmpty();
    }
}
