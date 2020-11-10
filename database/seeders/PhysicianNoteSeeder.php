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
        DB::table('physician_notes')->insert([
            'id' => 3,
            'created_at' => new Carbon(new DateTime('2020-09-02 12:15')),
            'encounter_id' => 10,
            'physician_type_id' => 9,
            'note' => 'Ms. Susan Peters 30 year old, G2P1, 38 weeks was admitted with painful contractions since morning. She reported good fetal movement and denied rupture of membranes, or vaginal bleeding.

            LMP: 12/10/19
            
            EDD: 9/15/20
            
            HPI: Her prenatal care was uneventful, she was on prenatal multivitamin tablets. Her labs including HIV, GBS, GDM, CBC, and Rubella were all documented as normal. 
            
            Obstetric History: She has one son 2 years old delivered by normal spontaneous vaginal delivery (NSVD), 7lb 15oz, uncomplicated pregnancy and delivery, she breastfed him till the age of one year.
            
            Gynecological History: She had her period at the age of 12, cycles are usually regular, and has not used any kind of contraception 
            
            Past Medical and Past Surgical History: negative
            
            Medications: Prenatal Vitamins
            
            Allergies: No known drug Allergies
            
            Family History: Grandparents, Parents and siblings, all well
            
            Social History: married 5 years ago, monogamous with her husband.
            
            Habits: No Tobacco, drug or recreational use.
            
            Physical Exam: (Focused): She looked well on admission not pale, no leg edema, no vaginal bleeding in obvious pain.
            
            Vitals were normal, Heart; lungs were normal.
            
            Abdomen: Gravid uterus non tender, fundal height 38 weeks, fetus in vertex presentation.
            
            Sterile vaginal exam (SVE) = 4cm dilated /80% effaced /Vertex presentation/
            
            –1 station.
            
            By Ultrasound: A single viable fetus was seen of 38 weeks gestation, which corresponds well with her previous ultrasounds.  Normal amniotic fluid, placenta fundal, vertex presentation. 
            
            By EFM (Electronic fetal monitoring): baseline fetal heart rate was 140, accelerations seen and no decelerations, regular contractions were seen. 
            
            
            
            At 11:00 am, she was admitted to the L&D was given IVF and kept on continued EFM to anticipate NSVD. 
            
            All pertinent labs were sent out.
            
            The first and second stage of labor progressed uneventfully. (Notes available in her chart).
            
            
            
            At 6:00 pm she delivered by NSVD a live male 8lb 13oz, Apgar score 9/9 with no obvious abnormality. The baby was delivered without difficulty, the cord was clamped and cut.  There was a delay in separation of the placenta of around 30 minutes, there was severe post-partum hemorrhage (PPH). She was diagnosed with retained placenta. Part of the placenta was densely adherent at one edge and would not deliver. The patient continued to bleed and the uterus became soft.
            
            She was unconscious, Pulse 110/minute, and her blood pressure was 60/40mm/Hg.
            
            Oxytocin was given together with bimanual compression. With an expected blood loss above 1500cc and active bleeding, she was given aggressive fluid resuscitation with crystalloids and packed RBC’s while she was moved to the operating theatre.
            
            In the OR, she was given General anesthesia, a D&C was done followed by bimanual compression. The bleeding stopped. She was taken to recovery room in stable condition.
            
            
            
            She was kept under observation, all blood work up was sent, and she received a total of 3 units of Packed RBC. 
            
            
            
            3 days later she was discharged in a stable condition. Vital signs were normal. She was given Iron Tablets in addition to her pre natal vitamin, and was given a 2 weeks follow up appointment.
            
            MM, MD, 9/24/20
            
            
            
            
        '
        ]);
    }
}
