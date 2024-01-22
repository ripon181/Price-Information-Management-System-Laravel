<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Roles
        $roleSuperAdmin = Role::create(['name' => 'SuperAdmin']);
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleManager = Role::create(['name' => 'Manager']);

        //Permission List As Array
        $permissions = [

            [
                'group_name' =>'dashboard',
                'permissions' =>[
                    //Dashboard Permission

                    'dashboard.view',
                    'tenda.view',
                    'cisco.view',
                    'meetion.view',
                    'phyhome.view',
                    'rosenberger.view',
                    'ubiquiti.view',
                    'solitine.view',
                    'marsriva.view',
                    'ipcom.view',
                ]
                ],

            [
                'group_name' =>'Category',
                'permissions' =>[
                    //Category Permission
                    'category.create',
                    'category.view',
                    'category.edit',
                    'category.delete',
                ]
                ],

            [
                'group_name' =>'Brand',
                'permissions' =>[
                    //Brand Permission
                    'brand.create',
                    'brand.view',
                    'brand.edit',
                    'brand.delete',
                ]
                ],

            [
                'group_name' =>'Product',
                'permissions' =>[
                    //product Permission
                    'product.create',
                    'product.view',
                    'product.edit',
                    'product.delete',
                ]
                ],

            [
                'group_name' =>'Product Manager',
                'permissions' =>[
                     //productmanager Permission
                    'productmanager.create',
                    'productmanager.view',
                    'productmanager.edit',
                    'productmanager.delete',
                ]
                ],
                [
                    'group_name' =>'settings',
                    'permissions' =>[
                        //settings Permission
                        'role.create',
                        'role.view',
                        'role.edit',
                        'role.delete',
                        'user.create',
                        'user.view',
                        'user.edit',
                        'user.delete',
                    ]
                    ],    
        
        
        ];
        for ($i=0; $i <count($permissions) ; $i++) { 
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j=0; $j <count($permissions[$i]['permissions']) ; $j++) { 
               //Create Permission 
            $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);
            }
            
        }
       
       
    }
}
