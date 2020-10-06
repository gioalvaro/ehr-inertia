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
            'description' => 'Hgb',
            'code' => 1,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Hematocrit',
            'code' => 2,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'WBC',
            'code' => 3,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Platelets',
            'code' => 4,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Bilirubin Total',
            'code' => 5,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'ALT',
            'code' => 6,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'AST',
            'code' => 7,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Alkaline Phosphatase',
            'code' => 8,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Amylase',
            'code' => 9,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Lipase',
            'code' => 10,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Creatinine kinase',
            'code' => 11,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'CKMB',
            'code' => 12,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Troponine',
            'code' => 13,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'INR',
            'code' => 14,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Albumin',
            'code' => 15,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'CBC',
            'code' => 16,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Red Blood Cells Count',
            'code' => 17,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Mean Corpuscular Volume',
            'code' => 18,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Red Cells Distribution Width',
            'code' => 19,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'RBC nucleated',
            'code' => 20,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'White Blood Cell Differential',
            'code' => 21,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Leukocyte Count',
            'code' => 22,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Segmented Neutrophils',
            'code' => 23,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Bands',
            'code' => 24,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Eosinophils',
            'code' => 25,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Basophils',
            'code' => 26,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Lymphocytes',
            'code' => 27,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Monocytes',
            'code' => 28,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Partial Thromboplastin time (activated)',
            'code' => 29,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Prothrombin Time',
            'code' => 30,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Thrombin Time',
            'code' => 31,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'D-dimer',
            'code' => 32,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Fibrin Degradation Products',
            'code' => 33,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Fibrinogen',
            'code' => 34,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Hemoglobin, A1c',
            'code' => 35,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'ABORH',
            'code' => 36,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Reticulocyte Count',
            'code' => 37,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Reticulocyte Erythrocyte Sedimentation Rate',
            'code' => 38,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Ferritin',
            'code' => 39,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Iron Levels',
            'code' => 40,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Sodium (NA+)',
            'code' => 41,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Potassium (K+)',
            'code' => 42,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Chloride (Cl-)',
            'code' => 43,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Bicarbonate (HCO3-)',
            'code' => 44,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Urea Nitrogen, Serum',
            'code' => 45,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Creatinine, Serum',
            'code' => 46,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Glucose, Random',
            'code' => 47,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Billirubin Direct',
            'code' => 48,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'GGT',
            'code' => 49,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Calcium',
            'code' => 50,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Magnesium',
            'code' => 51,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Phosphorous',
            'code' => 52,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Magnesium',
            'code' => 53,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'CK-MB',
            'code' => 54,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Ammonia',
            'code' => 55,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Glucose Fasting',
            'code' => 56,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Uric Acid Serum',
            'code' => 57,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Blood Alcohol Levels',
            'code' => 58,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Acetaminophen Levels',
            'code' => 59,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'ASA Levels',
            'code' => 60,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Beta-hCG, Quantitative',
            'code' => 61,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Cholesterol',
            'code' => 62,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Tryglycerides',
            'code' => 63,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Low Density LDL',
            'code' => 64,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'High Density HDL',
            'code' => 65,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IgA',
            'code' => 66,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IgE',
            'code' => 67,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IgG',
            'code' => 68,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IgM',
            'code' => 69,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Estriol',
            'code' => 70,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'FSH',
            'code' => 71,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'LH',
            'code' => 72,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'TSH',
            'code' => 73,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'T3',
            'code' => 74,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'T4',
            'code' => 75,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Growth Hormone',
            'code' => 76,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Prolactine',
            'code' => 77,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Cortisol Serum',
            'code' => 78,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IGF-1',
            'code' => 79,
            'verification' => false
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Alpha-fetoprotein',
            'code' => 80,
            'verification' => false
        ]);

    }
}
