<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'type' => 'Rx',
            'image_url' => '/storage/imaging-dx/Imaging.jpg',
            'observation' => 'CLINICAL INFORMATION: RIGHT UPPER QUADRANT PAIN. \nEXAMINATION: ABDOMEN ULTRASOUND, LIMITED\nFINDINGS: LIVER IS NORMAL IN APPEARANCE WITHOUT BILIARY DUCTAL DILITATION OR FOCAL MASS.\nGALLBLADDER IS DISTENDED WITH WALL THICKENING, A GALLSTONE AND BILIARY SLUDGE ARE PRESENT,\nAND PERICHOLECYSTIC FLUID IS PRESENT. PANCREAS APPEARS NORMAL. THE COMMON DUCT MEASURES 3 MM IN DIAMETER.'
        ]);
    }
}
