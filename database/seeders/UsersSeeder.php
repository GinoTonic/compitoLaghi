<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->name="Pippo";
        $user->email="pippo@gmail.com";
        $user->password=Hash::make("ciao");
        $user->save();
        User::factory()->count(30)->create();
    }
}
