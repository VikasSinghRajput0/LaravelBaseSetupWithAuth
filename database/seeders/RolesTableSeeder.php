<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
     /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

          
            $roles = [
                [
                    
                    'id' => '1',
                    'role' => 'Super Admin',
                    'created_by' => 'SuperAdmin',
                    'active' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
              
                [
                    'id' => '2',
                    'role' => 'Admin',
                    'created_by' => 'SuperAdmin',
                    'active' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => '3',
                    'role' => 'User',
                    'created_by' => 'SuperAdmin',
                    'active' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                
                
            
            ];
            
            foreach( $roles as $role) {
               
                Role::updateOrCreate(['id' => $role['id']],$role);
            }

        }
}
