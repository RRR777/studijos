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

        $lector1 = new User();
        $lector1->email = 'lector1@mail.com';
        $lector1->type = 1;
        $lector1->name = 'Dėstytojas1';
        $lector1->lastName = 'Pirmas1';
        $lector1->phone = 454545451;
        $lector1->password = bcrypt('123456');
        $lector1->save();

        $lector2 = new User();
        $lector2->email = 'lector2@mail.com';
        $lector2->type = 1;
        $lector2->name = 'Dėstytojas2';
        $lector2->lastName = 'Pirmas2';
        $lector2->phone = 454545452;
        $lector2->password = bcrypt('123456');
        $lector2->save();

        $lector3 = new User();
        $lector3->email = 'lector3@mail.com';
        $lector3->type = 1;
        $lector3->name = 'Dėstytojas3';
        $lector3->lastName = 'Pirmas3';
        $lector3->phone = 454545453;
        $lector3->password = bcrypt('123456');
        $lector3->save();

        $lector4 = new User();
        $lector4->email = 'lector4@mail.com';
        $lector4->type = 1;
        $lector4->name = 'Dėstytojas4';
        $lector4->lastName = 'Pirmas4';
        $lector4->phone = 454545454;
        $lector4->password = bcrypt('123456');
        $lector4->save();

        $lector5 = new User();
        $lector5->email = 'lector5@mail.com';
        $lector5->type = 1;
        $lector5->name = 'Dėstytojas5';
        $lector5->lastName = 'Pirmas5';
        $lector5->phone = 454545455;
        $lector5->password = bcrypt('123456');
        $lector5->save();

        $lector6 = new User();
        $lector6->email = 'lector6@mail.com';
        $lector6->type = 1;
        $lector6->name = 'Dėstytojas6';
        $lector6->lastName = 'Pirmas6';
        $lector6->phone = 454545456;
        $lector6->password = bcrypt('123456');
        $lector6->save();

        $lector7 = new User();
        $lector7->email = 'lector7@mail.com';
        $lector7->type = 1;
        $lector7->name = 'Dėstytojas7';
        $lector7->lastName = 'Pirmas7';
        $lector7->phone = 454545457;
        $lector7->password = bcrypt('123456');
        $lector7->save();

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
