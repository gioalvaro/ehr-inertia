<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImagingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('imagings')->insert([
            'id' => 1,
            'encounter_id' => 1,
            'type' => 'ultrasound',
            'summary' => 'CLINICAL INFORMATION: RIGHT UPPER QUADRANT PAIN. 
            EXAMINATION: ABDOMEN ULTRASOUND, LIMITED
            FINDINGS: LIVER IS NORMAL IN APPEARANCE WITHOUT BILIARY DUCTAL DILITATION OR FOCAL MASS.
            GALLBLADDER IS DISTENDED WITH WALL THICKENING, A GALLSTONE AND BILIARY SLUDGE ARE PRESENT,
            AND PERICHOLECYSTIC FLUID IS PRESENT. PANCREAS APPEARS NORMAL. THE COMMON DUCT MEASURES 3 MM IN DIAMETER.'
        ]);
        DB::table('imaging_items')->insert([
            'id' => 1,
            'imaging_id' => 1,            
            'image_url' => '/storage/imaging-dx/Imaging.jpg',
            'observation' => ''
        ]);
    }
}
