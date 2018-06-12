<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lector = new User();
        $lector->email = 'lector@mail.com';
        $lector->type = 1;
        $lector->name = 'Dėstytojas';
        $lector->lastName = 'Pirmas';
        $lector->phone = 45454545;
        $lector->password = bcrypt('123456');
        $lector->save();

        $student = new User();
        $student->email = 'student@mail.com';
        $student->type = 2;
        $student->name = 'Studentas';
        $student->lastName = 'Pirmas';
        $student->phone = 245254254;
        $student->password = bcrypt('123456');
        $student->save();
    }
}
