<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('roles')->insert([
            'name' 	=> 'admin',
            'label' => 'Site Administrator',
            'description' => 'This user controls the event on the site',
        ]); 

        DB::table('roles')->insert([
            'name' 	=> 'user',
            'label' => 'Site User',
            'description' => 'This user is the sufferer of the event on the site.',
        ]);	

        DB::table('roles')->insert([
            'name' 	=> 'salesman',
            'label' => 'Customer Care',
            'description' => 'This user attend to users complain and chat with users.',
        ]);

        DB::table('permissions')->insert([
            'name' 	=> 'buy',
            'label' => 'Buy Currency from the Site',
            'description' => 'This Permission gives a user the ability to buy currency',
        ]);

        DB::table('permissions')->insert([
            'name' 	=> 'sell',
            'label' => 'Sell Currency to the Site',
            'description' => 'This Permission gives a user the ability to sell currency',
        ]);

        DB::table('permissions')->insert([
            'name' 	=> 'exchange',
            'label' => 'exchange Currency on the Site',
            'description' => 'This Permission gives a user the ability to exchange currency',
        ]);

        DB::table('permissions')->insert([
            'name' 	=> 'deposit',
            'label' => 'deposit Currency on the Site',
            'description' => 'This Permission gives a user the ability to deposit currency to Dorm Account',
        ]);

        DB::table('permissions')->insert([
            'name' 	=> 'suspend',
            'label' => 'suspend users on the Site',
            'description' => 'This Permission gives a user the ability to suspend users',
        ]);

        DB::table('permissions')->insert([
            'name' 	=> 'activate',
            'label' => 'activate users on the Site',
            'description' => 'This Permission gives a user the ability to activate users',
        ]);

        DB::table('permissions')->insert([
            'name' 	=> 'complete_transaction',
            'label' => 'complete transaction on the Site',
            'description' => 'This Permission gives a user the ability to complete transaction of users',
        ]);

        DB::table('permissions')->insert([
            'name' 	=> 'decline_transaction',
            'label' => 'decline transaction on the Site',
            'description' => 'This Permission gives a user the ability to decline transaction of users',
        ]);

        DB::table('permission_role')->insert([
        	'permission_id' => 1 ,
        	'role_id' => 	2,
        ]);

        DB::table('permission_role')->insert([
        	'permission_id' => 2 ,
        	'role_id' => 	2,
        ]);

        DB::table('permission_role')->insert([
        	'permission_id' => 3 ,
        	'role_id' => 	2,
        ]);

        DB::table('permission_role')->insert([
        	'permission_id' => 4 ,
        	'role_id' => 	2,
        ]);

        DB::table('permission_role')->insert([
        	'permission_id' => 5 ,
        	'role_id' => 	1,
        ]);

        DB::table('permission_role')->insert([
        	'permission_id' => 6 ,
        	'role_id' => 	1,
        ]);

        DB::table('permission_role')->insert([
        	'permission_id' => 7 ,
        	'role_id' => 	1,
        ]);

        DB::table('permission_role')->insert([
        	'permission_id' => 8 ,
        	'role_id' => 	1,
        ]);
    }
}
