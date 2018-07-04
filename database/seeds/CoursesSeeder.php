<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course();
        $course->name = "PHP";
        $course->save();

        $course2 = new Course();
        $course2->name = "Front_end";
        $course2->save();
        
        $course3 = new Course();
        $course3->name = "UX/UI";
        $course3->save();
    }
}
