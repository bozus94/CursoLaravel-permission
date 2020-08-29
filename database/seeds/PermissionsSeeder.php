<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $AdminRoles = [
            Permission::create([
                'name' => 'roles.index',
                'description' => 'Permite listar los roles del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'roles.show',
                'description' => 'Permite visualizar en detalle los roles del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'roles.create',
                'description' => 'Permite crear roles del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'roles.edit',
                'description' => 'Permite editar los roles del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'roles.destroy',
                'description' => 'Permite elimar los roles del sistema',
                'guard_name' => 'web',
            ]),
        ];
        $AdminProducts = [
            Permission::create([
                'name' => 'productos.index',
                'description' => 'Permite listar los productos del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'productos.show',
                'description' => 'Permite visualizar en detalle los productos del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'productos.create',
                'description' => 'Permite crear productos del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'productos.edit',
                'description' => 'Permite editar los productos del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'productos.destroy',
                'description' => 'Permite elimar los productos del sistema',
                'guard_name' => 'web',
            ]),
        ];
        $AdminUsers = [
            Permission::create([
                'name' => 'users.index',
                'description' => 'Permite listar los users del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'users.show',
                'description' => 'Permite visualizar en detalle los users del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'users.edit',
                'description' => 'Permite editar los users del sistema',
                'guard_name' => 'web',
            ]),
            Permission::create([
                'name' => 'users.destroy',
                'description' => 'Permite elimar los users del sistema',
                'guard_name' => 'web',
            ]),
        ];

        $prodsRole = Role::create([
            'name' => 'Administrador de productos',
            'description' => 'Permite gestionarGestiona los productos del sistema',
            'guard_name' => 'web',
        ]);
        $prodsRole->givePermissionTo($AdminProducts);

        $rolesRole = Role::create([
            'name' => 'Administrador de roles',
            'description' => 'Gestiona los roles del sistema',
            'guard_name' => 'web',
        ]);
        $rolesRole->givePermissionTo($AdminRoles);
            
        $usersRole = Role::create([
            'name' => 'Administrador de usuarios',
            'description' => 'Gestiona los usuarios del sistema',
            'guard_name' => 'web',
        ]);
        $usersRole->givePermissionTo($AdminUsers);

        /* SUPER-ADMIN */

        $superAdmin = Role::create([
            'name' => 'Super Administrador',
            'description' => 'Administrador total del sistema',
            'guard_name' => 'web',
        ]);
        $user = User::create([
            'name' => 'Bryan Ortega',
            'email' => 'master@admin.com',
            'password' => bcrypt('admin12340'),
        ]);
        $user->assignRole($superAdmin);
    }
}
