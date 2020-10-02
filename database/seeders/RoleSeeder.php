<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Role::$roles as $key => $value) {

            DB::table('roles')->insert([
                'id' => $key,
                'name' => $value,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
