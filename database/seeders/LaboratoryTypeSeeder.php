<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LaboratoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();        
        DB::table('laboratory_types')->insert([
            'id' => 118,
            'description' => 'WBC',
            'code' => 118,
            'verification' => true,
            'laboratory_group_id' => 1
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 119,
            'description' => 'Coagulation Profile',
            'code' => 119,
            'verification' => false,
            'laboratory_group_id' => 1
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 120,
            'description' => 'Blood Urea Nitrogen',
            'code' => 120,
            'verification' => false,
            'laboratory_group_id' => 1
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 121,
            'description' => 'Platelets',
            'code' => 121,
            'verification' => true,
            'laboratory_group_id' => 1
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 122,
            'description' => 'Bands',
            'code' => 122,
            'verification' => true,
            'laboratory_group_id' => 1
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 123,
            'description' => 'Neutrophils',
            'code' => 123,
            'verification' => false,
            'laboratory_group_id' => 1
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 124,
            'description' => 'Hemoglobin',
            'code' => 124,
            'verification' => false,
            'laboratory_group_id' => 1
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 125,
            'description' => 'Hematocript',
            'code' => 125,
            'verification' => true,
            'laboratory_group_id' => 1
        ]); 
        DB::table('laboratory_types')->insert([
            'id' => 126,
            'description' => 'BUN',
            'code' => 126,
            'verification' => false,
            'laboratory_group_id' => 1
        ]); 
        DB::table('laboratory_types')->insert([
            'id' => 127,
            'description' => 'Urinary Specific Gravity',
            'code' => 127,
            'verification' => false,
            'laboratory_group_id' => 1
        ]);        
        DB::table('laboratory_types')->insert([
            'id' => 2,
            'laboratory_group_id' => 1,
            'description' => 'White Blood Cell Differential',
            'code' => 2,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 3,
            'laboratory_group_id' => 1,
            'description' => 'INR',
            'code' => 3,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 4,
            'laboratory_group_id' => 1,
            'description' => 'Partial Thromboplastin time (activated)',
            'code' => 4,
            'verification' => false
        ]);        
        DB::table('laboratory_types')->insert([
            'id' => 5,
            'laboratory_group_id' => 1,
            'description' => 'Prothrombin Time',
            'code' => 5,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 6,
            'laboratory_group_id' => 1,
            'description' => 'Thrombin Time',
            'code' => 6,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 7,
            'laboratory_group_id' => 1,
            'description' => 'D-dimer',
            'code' => 7,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 8,
            'laboratory_group_id' => 1,
            'description' => 'Fibrin Degradation Products',
            'code' => 8,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 9,
            'laboratory_group_id' => 1,
            'description' => 'Fibrinogen',
            'code' => 9,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 10,
            'laboratory_group_id' => 1,
            'description' => 'Hemoglobin, A1c',
            'code' => 10,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 11,
            'laboratory_group_id' => 1,
            'description' => 'ABORH',
            'code' => 11,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 12,
            'laboratory_group_id' => 1,
            'description' => 'Type & Screen',
            'code' => 12,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 13,
            'laboratory_group_id' => 1,
            'description' => 'Reticulocyte Count',
            'code' => 13,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 14,
            'code' => 14,
            'laboratory_group_id' => 1,
            'description' => 'Reticulocyte Erythrocyte Sedimentation Rate',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 15,
            'code' => 15,
            'laboratory_group_id' => 1,
            'description' => 'Ferritin',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 16,
            'code' => 16,
            'laboratory_group_id' => 1,
            'description' => 'Iron Levels',
            'verification' => false
        ]);
        
        DB::table('laboratory_types')->insert([
            'id' => 17,
            'code' => 17,
            'laboratory_group_id' => 2,
            'description' => 'Sodium (Na+)',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 18,
            'code' => 18,
            'laboratory_group_id' => 2,
            'description' => 'Potassium (K+)',            
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 19,
            'code' => 19,
            'laboratory_group_id' => 2,
            'description' => 'Chloride (Cl-)',            
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 20,
            'code' => 20,
            'laboratory_group_id' => 2,
            'description' => 'Bicarbonate (HCO3-)',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 21,
            'code' => 21,
            'laboratory_group_id' => 2,
            'description' => 'Urea Nitrogen, Serum',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 22,
            'code' => 22,
            'laboratory_group_id' => 2,
            'description' => 'Creatinine, Serum',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 23,
            'code' => 23,
            'laboratory_group_id' => 2,
            'description' => 'Glucose, Random',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 24,
            'code' => 24,
            'laboratory_group_id' => 2,
            'description' => 'AST',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 25,
            'code' => 25,
            'laboratory_group_id' => 2,
            'description' => 'ALT',
            'verification' => false
        ]);        
        DB::table('laboratory_types')->insert([
            'id' => 26,
            'code' => 26,
            'laboratory_group_id' => 2,
            'description' => 'Alkaline Phosphatase',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 27,
            'code' => 27,
            'laboratory_group_id' => 2,
            'description' => 'Lipase',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 28,
            'code' => 28,
            'laboratory_group_id' => 2,
            'description' => 'Amylase',
            'verification' => false
        ]);   
        DB::table('laboratory_types')->insert([
            'id' => 29,
            'code' => 29,
            'laboratory_group_id' => 2,
            'description' => 'Bilirubin Direct',
            'verification' => false
        ]);     
        DB::table('laboratory_types')->insert([
            'id' => 30,
            'code' => 30,
            'laboratory_group_id' => 2,
            'description' => 'Bilirubin Total',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 31,
            'code' => 31,
            'laboratory_group_id' => 2,
            'description' => 'GGT',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 32,
            'code' => 32,
            'laboratory_group_id' => 2,
            'description' => 'Calcium',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 33,
            'code' => 33,
            'laboratory_group_id' => 2,
            'description' => 'Magnesium (Mg2+)',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 34,
            'code' => 34,
            'laboratory_group_id' => 2,
            'description' => 'Phosphorous',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 35,
            'code' => 35,
            'laboratory_group_id' => 2,
            'description' => 'Albumin',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 36,
            'code' => 36,
            'laboratory_group_id' => 2,
            'description' => 'Creatinine kinase',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 37,
            'code' => 37,
            'laboratory_group_id' => 2,
            'description' => 'CK-MB',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 38,
            'code' => 38,
            'laboratory_group_id' => 2,
            'description' => 'Troponine',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 39,
            'code' => 39,
            'laboratory_group_id' => 2,
            'description' => 'Ammonia',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 40,
            'code' => 40,
            'laboratory_group_id' => 2,
            'description' => 'Glucose Fasting',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 41,
            'code' => 41,
            'laboratory_group_id' => 2,
            'description' => 'Uric Acid Serum',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 42,
            'code' => 42,
            'laboratory_group_id' => 2,
            'description' => 'Blood Alcohol Levels',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 43,
            'code' => 43,
            'laboratory_group_id' => 2,
            'description' => 'Acetaminophen Levels',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 44,
            'code' => 44,
            'laboratory_group_id' => 2,
            'description' => 'ASA Levels',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 45,
            'code' => 45,
            'laboratory_group_id' => 2,
            'description' => 'Beta-hCG, Quantitative',            
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 46,
            'code' => 46,
            'laboratory_group_id' => 2,
            'description' => '1hr GCT',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 47,
            'code' => 47,
            'laboratory_group_id' => 2,
            'description' => '3hr GTT',
            'verification' => false
        ]);

        DB::table('laboratory_types')->insert([
            'id' => 48,
            'code' => 48,
            'laboratory_group_id' => 3,
            'description' => 'Cholesterol',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 49,
            'code' => 49,
            'laboratory_group_id' => 3,
            'description' => 'Tryglycerides',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 50,
            'code' => 50,
            'laboratory_group_id' => 3,
            'description' => 'Low Density LDL',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 51,
            'code' => 51,
            'laboratory_group_id' => 3,
            'description' => 'High Density HDL',            
            'verification' => false
        ]);

        DB::table('laboratory_types')->insert([
            'id' => 53,
            'code' => 53,
            'laboratory_group_id' => 4,
            'description' => 'IgA',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 54,
            'code' => 54,
            'laboratory_group_id' => 4,
            'description' => 'IgE',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 55,
            'code' => 55,
            'laboratory_group_id' => 4,
            'description' => 'Rubella IgG',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 56,
            'code' => 56,
            'laboratory_group_id' => 4,
            'description' => 'Varicella IgG',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 57,
            'code' => 57,
            'laboratory_group_id' => 4,
            'description' => 'Rubella IgM',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 58,
            'code' => 58,
            'laboratory_group_id' => 4,
            'description' => 'Varicella IgM',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 59,
            'code' => 59,
            'laboratory_group_id' => 5,
            'description' => 'Estriol',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 60,
            'code' => 60,
            'laboratory_group_id' => 5,
            'description' => 'FSH',            
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 61,
            'code' => 61,
            'laboratory_group_id' => 5,
            'description' => 'LH',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 62,
            'code' => 62,
            'laboratory_group_id' => 5,
            'description' => 'TSH',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 63,
            'code' => 63,
            'laboratory_group_id' => 5,
            'description' => 'T3',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 64,
            'code' => 64,
            'laboratory_group_id' => 5,
            'description' => 'T4',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 65,
            'code' => 65,
            'laboratory_group_id' => 5,
            'description' => 'Growth Hormone',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 66,
            'code' => 66,
            'laboratory_group_id' => 5,
            'description' => 'Prolactin',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 67,
            'code' => 67,
            'laboratory_group_id' => 5,
            'description' => 'Cortisol Serum',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 68,
            'code' => 68,
            'laboratory_group_id' => 5,
            'description' => 'IGF-1',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 69,
            'code' => 69,
            'laboratory_group_id' => 5,
            'description' => 'Alpha-fetoprotein',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 70,
            'code' => 70,
            'laboratory_group_id' => 6,
            'description' => 'Urinalysis (UA)',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 71,
            'code' => 71,
            'laboratory_group_id' => 6,
            'description' => 'Osmolality',            
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 72,
            'code' => 72,
            'laboratory_group_id' => 6,
            'description' => 'Oxalate',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 73,
            'code' => 73,
            'laboratory_group_id' => 6,
            'description' => 'Potassium',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 74,
            'code' => 74,
            'laboratory_group_id' => 6,
            'description' => 'Proteins, total',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 75,
            'code' => 75,
            'laboratory_group_id' => 6,
            'description' => 'Sodium',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 76,
            'code' => 76,
            'laboratory_group_id' => 6,
            'description' => 'Uric Acid',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 77,
            'code' => 77,
            'laboratory_group_id' => 6,
            'description' => 'Calcium',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 78,
            'code' => 78,
            'laboratory_group_id' => 6,
            'description' => 'Chloride',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 79,
            'code' => 79,
            'laboratory_group_id' => 6,
            'description' => 'Creatinine Clearance',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 80,
            'code' => 80,
            'laboratory_group_id' => 6,
            'description' => 'Urine Drug Screen',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 81,
            'code' => 81,
            'laboratory_group_id' => 6,
            'description' => 'Urine Pregnancy Test',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 82,
            'code' => 82,
            'laboratory_group_id' => 6,
            'description' => 'Urine STD',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 83,
            'code' => 83,
            'laboratory_group_id' => 7,
            'description' => 'Cerebrospinal Fluid',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 84,
            'code' => 84,
            'laboratory_group_id' => 7,
            'description' => 'Cell count',
            'verification' => false
        ]);        
        DB::table('laboratory_types')->insert([
            'id' => 86,
            'code' => 86,
            'laboratory_group_id' => 7,
            'description' => 'Gamma Globulin',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 87,
            'code' => 87,
            'laboratory_group_id' => 7,
            'description' => 'Glucose',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 88,
            'code' => 88,
            'laboratory_group_id' => 7,
            'description' => 'Pressure',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 89,
            'code' => 89,
            'laboratory_group_id' => 7,
            'description' => 'Proteins, total',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 90,
            'code' => 90,
            'laboratory_group_id' => 8,
            'description' => 'Blood',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 91,
            'code' => 91,
            'laboratory_group_id' => 8,
            'description' => 'Urine',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 92,
            'code' => 92,
            'laboratory_group_id' => 8,
            'description' => 'Sputum',
            'verification' => false
        ]);        
        DB::table('laboratory_types')->insert([
            'id' => 94,
            'code' => 94,
            'laboratory_group_id' => 8,
            'description' => 'Ascites',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 95,
            'code' => 95,
            'laboratory_group_id' => 8,
            'description' => 'Abscess',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 96,
            'code' => 96,
            'laboratory_group_id' => 8,
            'description' => 'Wound',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 97,
            'code' => 97,
            'laboratory_group_id' => 8,
            'description' => 'Anti-HAV ab',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 98,
            'code' => 98,
            'laboratory_group_id' => 8,
            'description' => 'Anti-HAV ab',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 114,
            'code' => 114,
            'laboratory_group_id' => 8,
            'description' => 'Anti-HBs Ab',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 99,
            'code' => 99,
            'laboratory_group_id' => 8,
            'description' => 'HBsAg',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 100,
            'code' => 100,
            'laboratory_group_id' => 8,
            'description' => 'Anti-HCV Ab',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 101,
            'code' => 101,
            'laboratory_group_id' => 8,
            'description' => 'HIB e-Ag',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 102,
            'code' => 102,
            'laboratory_group_id' => 8,
            'description' => 'Delta Ag',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 103,
            'code' => 103,
            'laboratory_group_id' => 8,
            'description' => 'Anti-HBc Ab',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 104,
            'code' => 104,
            'laboratory_group_id' => 8,
            'description' => 'HIV-Ab',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 105,
            'code' => 105,
            'laboratory_group_id' => 8,
            'description' => 'HIV p24 Ag',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 106,
            'code' => 106,
            'laboratory_group_id' => 8,
            'description' => 'VDRL',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 107,
            'code' => 107,
            'laboratory_group_id' => 8,
            'description' => 'Clostridium difficile toxin',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 108,
            'code' => 108,
            'laboratory_group_id' => 8,
            'description' => 'Ova & Parasite',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 109,
            'code' => 109,
            'laboratory_group_id' => 8,
            'description' => 'Stool Culture',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 110,
            'code' => 110,
            'laboratory_group_id' => 9,
            'description' => 'Fecal Ocult Blood Test',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 111,
            'code' => 111,
            'laboratory_group_id' => 9,
            'description' => 'Pap Smear',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 112,
            'code' => 112,
            'laboratory_group_id' => 9,
            'description' => 'GBS, vaginal swab',
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 113,
            'code' => 113,
            'laboratory_group_id' => 5,
            'description' => 'ACTH',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 128,
            'code' => 128,
            'laboratory_group_id' => 1,
            'description' => 'Red Blood Cells Count',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 129,
            'code' => 129,
            'laboratory_group_id' => 1,
            'description' => 'Hgb',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 130,
            'code' => 130,
            'laboratory_group_id' => 1,
            'description' => 'Mean Corpuscular Volume',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 131,
            'code' => 131,
            'laboratory_group_id' => 1,
            'description' => 'Red Cells Distribution Width',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 132,
            'code' => 132,
            'laboratory_group_id' => 1,
            'description' => 'RBC nucleated',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 133,
            'code' => 133,
            'laboratory_group_id' => 1,
            'description' => 'Leukocyte Count',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 134,
            'code' => 134,
            'laboratory_group_id' => 1,
            'description' => 'Segmented Neutrophils',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 135,
            'code' => 135,
            'laboratory_group_id' => 1,
            'description' => 'Eosinophils',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 136,
            'code' => 136,
            'laboratory_group_id' => 1,
            'description' => 'Basophils',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 137,
            'code' => 137,
            'laboratory_group_id' => 1,
            'description' => 'Lymphocytes',
            'verification' => true
        ]);
        DB::table('laboratory_types')->insert([
            'id' => 138,
            'code' => 138,
            'laboratory_group_id' => 1,
            'description' => 'Monocytes',
            'verification' => true
        ]);



    }
}
