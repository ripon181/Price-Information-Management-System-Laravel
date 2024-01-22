<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = admin::where('email', 'sb.rownokripon@gmail.com')->first();
        if(is_null($admin)){
            $admin = new admin();
            $admin->name = "MD Ripon";
            $admin->email = "sb.rownokripon@gmail.com";
            $admin->username = "ripon";
            $admin->password = Hash::make('123456789');
            $admin->save();
        }
       

    }
}
