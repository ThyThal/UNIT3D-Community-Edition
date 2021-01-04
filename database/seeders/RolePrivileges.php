<?php

namespace Database\Seeders;

use App\Models\Privilege;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePrivileges extends Seeder
{
    public function __construct()
    {
        $this->map = [
            'sudo' => Privilege::all(),
            'root' => Privilege::all(),
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_privilege')->truncate();
        foreach ($this->map as $role => $permissions) {
            $R = Role::where('slug', '=', $role)->first();
            foreach ($permissions as $permission) {
                $R->privileges()->attach($permission);
            }
        }
    }
}
