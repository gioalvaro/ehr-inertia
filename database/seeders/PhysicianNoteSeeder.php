<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class PhysicianNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('physician_notes')->insert([
            'id' => 1,
            'created_at' => new Carbon(new DateTime('2019-10-08 10:15')),
            'encounter_id' => 1,
            'physician_type_id' => 1,
            'note' => 'CC: abdominal pain
            HPI: Jose Coronel is a 50 y/o male who presents to ED with abdominal pain.  Pain started suddenly after eating dinner, approx. 4 hrs ago.  Pain is 10/10, located in RUQ of abdomen.  Pain is stabbing, achy, doesn’t radiate.  He tried Maalox without relief.  No fever. Pain is associated with nausea, no blood in emesis.  No diarrhea or blood in stool. No chest pain.  The pain is so severe it takes his breath away, but no other shortness of breath.  No dysuria or hematuria. No recent travel. No trauma.  He reports he’s had pain like this before, but he usually takes Maalox and it goes away.  This time, it didn’t go away and is more severe than usual.  He is actively vomiting during my exam.
            ALL: NKDA
            Soc: no tobacco, occasional alcohol
            PE: VS reviewed
                Gen: appears uncomfortable, in moderate distress due to pain
                Neuro: alert, oriented, moves all extremities equally and spontaneously
    HEENT: anicteric, mucous membranes moist, not diaphoretic
                CV: tachycardic, no murmurs/rubs/gallops, regular rhythm
                Pulm: equal breath sounds bilaterally, no ronchi/rales/wheezes
                Abd: abdomen soft, +tenderness in the RUQ, neg Murphy’s sign, no rebound or guarding, no pulsatile abdominal masses
                Extremities: brisk femoral pulses bilat, skin warm
             Medical Decision Making: Patient presents with severe abrupt onset abdominal pain.  During exam, pt had approx. 100cc nonbilious emesis, guiac neg. Differential diagnosis includes: cholecystitis, cholelithiasis, AAA, MI, renal colic, ruptured hollow viscous.  Will check labs and medicate with IV fluids, antiemetics and analgesics. Anticipate need for bedside ultrasound.  Patient to be kept NPO while in ER.  This was discussed with the patient at length.
            Reassess: after medications, pt is feeling much better.  No pain (0/10) or nausea.  He is hungry and would like to eat.   HR & BP improved – initial tachycardia and hypertension likely related to pain.
    Reassess: patient tolerated PO challenge. Bedside ultrasound done. Patient has a mobile, 0.7 cm stone in the gallbladder, there was no perichoecystic fluid, the gallbladder wall is 0.3mm thick. The common bile duct was normal in size.  There was no sonographic Murphy’s sign.  These results and the labs were reviewed with him.  Pain is due to cholelithiais, which was discussed with him at length, no fever, leukocytosis, or ultrasound findings to suggest cholecystitis.  Advised diet modification and suggested he followup with general surgery for possible cholecystectomy.  Patient understands and agrees to the plan.
    
            Assessment: cholelithiasis
            Plan: discharge home in improved condition
                Diet modification
                Followup with general surgery recommended	
                Continue Maalox as needed for pain
                Discharge paperwork reviewed
    '
        ]);
        DB::table('physician_notes')->insert([
            'id' => 2,
            'created_at' => new Carbon(new DateTime('2020-06-13 9:50')),
            'encounter_id' => 2,
            'physician_type_id' => 1,
            'note' => 'S: Jose Coronel is a 50 y/o male who presents today with abdominal pain.  He’s had pain like this off/on for “years”.  Last night it got “really bad” after dinner. Last night, the pain was located in the right upper abdomen. He took Maalox and went to bed. This morning, it just was hurting a little (2/10). He skipped breakfast and now there is no pain (0/10).  He wanted to come in to make sure everything is “OK”.  He was seen for this same thing in the ER a few months ago and told that he had stones in his gallbladder.  Currently, no fever, nausea, vomiting, or chest pain. No shortness of breath.  Bowel movements are normal with no diarrhea or bloody stool.  No recent travel.  No trauma.  
            O: Vital Signs reviewed
                Gen: appears comfortable
                HEENT: anicteric sclera, mucous membranes moist
                Cardiovascular: regular rate & rhythm, no rubs/murmurs/gallops
                GI: abdomen soft, nontender, no rebound/guarding, no masses
            A/P: abdominal pain likely related to cholelithiasis
                -advised diet modification
                -followup with general surgery encouraged (referral already sent)
                -maalox as needed for pain
                -return precautions discussed
        '
        ]);
    }
}
