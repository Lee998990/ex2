<?php

use App\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Leesinu";
        $user->email = "monlungme@gmail.com";
        $user->password = bcrypt("1234");
        $user->save();


    }
}
