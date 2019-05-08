<?php

return [

    'models' => [

        /*
         * 权限的模型,如果不使用此模型, 也必须继承此模型
         */

        'permission' => \DavidNineRoc\Permission\Models\Permission::class,

        /*
         * 角色使用的模型,如果不使用此模型, 也必须继承此模型
         */

        'role' => \Spatie\Permission\Models\Role::class,

    ],

    'table_names' => [

        /*
         * 角色的表名
         */
        'roles' => 'roles',

        /*
         * 权限的表名
         */

        'permissions' => 'permissions',

        /*
         * 用户拥有的权限
         */
        'model_has_roles' => 'model_has_roles',

        /*
         * 角色和权限的关联表
         */
        'role_has_permissions' => 'role_has_permissions',
    ],

    // 等级的区分
    'levels' => [
        'menu' => 1,
        'permission' => 3,
    ],



    'cache' => [

        /*
         * By default all permissions are cached for 24 hours to speed up performance.
         * When permissions or roles are updated the cache is flushed automatically.
         */

        'expiration_time' => \DateInterval::createFromDateString('24 hours'),

        /*
         * The cache key used to store all permissions.
         */

        'key' => 'spatie.permission.cache',

        /*
         * When checking for a permission against a model by passing a Permission
         * instance to the check, this key determines what attribute on the
         * Permissions model is used to cache against.
         *
         * Ideally, this should match your preferred way of checking permissions, eg:
         * `$user->can('view-posts')` would be 'name'.
         */

        'model_key' => 'name',

        /*
         * You may optionally indicate a specific cache driver to use for permission and
         * role caching using any of the `store` drivers listed in the cache.php config
         * file. Using 'default' here means to use the `default` set in cache.php.
         */

        'store' => 'default',
    ],
];
