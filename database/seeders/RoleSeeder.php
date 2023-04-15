<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin_role= Role::create(['name'=>'Admin']);
       $processor_role= Role::create(['name'=>'Processor']);
       $sale_rep_role=Role::create(['name'=>'Sale_Rep']);
       $lender_role=Role::create(['name'=>'Lender']);

       $admin_permissions=[
          'user.create',
          'user.view',
          'user.delete',
          'user.edit',
          'user.update',
          'lender.create',
          'lender.view',
          'lender.edit',
          'lender.update',
          'lender.delete',
          'deal.create',
          'deal.view',
          'deal.edit',
          'deal.update',
          'deal.delete',
          'deal_lender.create',
          'deal_lender.view',
          'deal_lender.edit',
          'deal_lender.update',
          'deal_lender.delete',
       ];
       for($i=0;$i<count($admin_permissions);$i++)
       {
         $permission=Permission::create(['name'=>$admin_permissions[$i]]);
         $admin_role->givePermissionTo($permission);
        
       }
        $processor_permissions=[

          'user.view',
          'lender.view',
          'deal.view',
          'deal_lender.create',
          'deal_lender.view',
          'deal_lender.edit',
          'deal_lender.update',
          'deal_lender.delete',
          
       ];
     for($i=0;$i<count($processor_permissions);$i++)
       {
         $processor_role->givePermissionTo($processor_permissions[$i]);

       }
        $sale_rep_permissions=[

          'user.view',
          'lender.view',
          'deal.view',
          'deal_lender.view',
         ];
        for($i=0;$i<count($sale_rep_permissions);$i++)
       {

         $sale_rep_role->givePermissionTo($sale_rep_permissions[$i]);
        
       }
        $lender_permissions=[

          'user.view',
          'lender.view',
          'lender.edit',
          'lender.update',
          'deal.view',
          'deal_lender.view',
         ];
        for($i=0;$i<count($lender_permissions);$i++)
       {

         $lender_role->givePermissionTo($lender_permissions[$i]);
        
       }
    }
}
