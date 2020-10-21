<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = User::updateOrCreate(
            ['email' => "romakrtutsik@gmail.com"],
            [
            'name' => "Roma Krutsko",
            'password' => bcrypt('637373683'),
            'email' => "romakrtutsik@gmail.com",
            ]);
    }
}
