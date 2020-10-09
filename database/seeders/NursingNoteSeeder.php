<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DateTime;
use DB;

class NursingNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nursing_notes')->insert([
            'id' => 1,
            'created_at' => new Carbon(new DateTime('2019-08-10 8:10')),
            'encounter_id' => 3,
            'nursing_type_id' => 4,
            'note' => 'Patient presents with abdominal pain. Came on suddenly after eating dinner.  Pain is severe 10/10.  Pain located right upper abdomen. Actively vomiting.  Patient roomed immediately and 18G iv started in Left Antecubital fossa.  MD notified.'
        ]);
        DB::table('nursing_notes')->insert([
            'id' => 2,
            'created_at' => new Carbon(new DateTime('2019-08-10 8:45')),
            'encounter_id' => 4,
            'nursing_type_id' => 1,
            'note' => 'Medications given.  patient reports pain and nausea improved after medications.  Physician at bedside performing ultrasound.  VS rechecked.'
        ]);
        DB::table('nursing_notes')->insert([
            'id' => 3,
            'created_at' => new Carbon(new DateTime('2019-08-10 9:45')),
            'encounter_id' => 5,
            'nursing_type_id' => 1,
            'note' => 'Pt reports he feels fine.  Tolerated PO challenge.  IV removed.  Patient verbalized understanding of discharge instructions.  Patient discharged home with his spouse.  VS reviewed.'
        ]);
        DB::table('nursing_notes')->insert([
            'id' => 4,
            'created_at' => new Carbon(new DateTime('2020-02-09 10:30')),
            'encounter_id' => 6,
            'nursing_type_id' => 1,
            'note' => 'Patient didn’t show up for this appointment/missed appointment.'
        ]);
        DB::table('nursing_notes')->insert([
            'id' => 5,
            'created_at' => new Carbon(new DateTime('2020-06-13 09:35')),
            'encounter_id' => 7,
            'nursing_type_id' => 1,
            'note' => 'Patient here with abdominal pain.  He’s had this pain before.  Current pain is 2/10.  Denies fever or nausea, vomiting, diarrhea.'
        ]);
        DB::table('nursing_notes')->insert([
            'id' => 6,
            'created_at' => new Carbon(new DateTime('2020-10-13 13:15')),
            'encounter_id' => 8,
            'nursing_type_id' => 1,
            'note' => 'Patient presents with recurrent abdominal pain.  Pain started 2-3 days ago.  Patient reports he feels sick and is belching a lot.  Current pain is 8/10.'
        ]);
    }
}
