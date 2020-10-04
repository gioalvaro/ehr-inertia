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
            'code' => 1
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Hematocrit',
            'code' => 2
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'WBC',
            'code' => 3
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Platelets',
            'code' => 4
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Bilirubin Total',
            'code' => 5
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'ALT',
            'code' => 6
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'AST',
            'code' => 7
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Alkaline Phosphatase',
            'code' => 8
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Amylase',
            'code' => 9
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Lipase',
            'code' => 10
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Creatinine kinase',
            'code' => 11
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'CKMB',
            'code' => 12
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Troponine',
            'code' => 13
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'INR',
            'code' => 14
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Albumin',
            'code' => 15
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'CBC',
            'code' => 16
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Red Blood Cells Count',
            'code' => 17
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Mean Corpuscular Volume',
            'code' => 18
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Red Cells Distribution Width',
            'code' => 19
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'RBC nucleated',
            'code' => 20
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'White Blood Cell Differential',
            'code' => 21
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Leukocyte Count',
            'code' => 22
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Segmented Neutrophils',
            'code' => 23
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Bands',
            'code' => 24
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Eosinophils',
            'code' => 25
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Basophils',
            'code' => 26
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Lymphocytes',
            'code' => 27
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Monocytes',
            'code' => 28
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Partial Thromboplastin time (activated)',
            'code' => 29
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Prothrombin Time',
            'code' => 30
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Thrombin Time',
            'code' => 31
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'D-dimer',
            'code' => 32
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Fibrin Degradation Products',
            'code' => 33
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Fibrinogen',
            'code' => 34
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Hemoglobin, A1c',
            'code' => 35
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'ABORH',
            'code' => 36
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Reticulocyte Count',
            'code' => 37
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Reticulocyte Erythrocyte Sedimentation Rate',
            'code' => 38
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Ferritin',
            'code' => 39
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Iron Levels',
            'code' => 40
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Sodium (NA+)',
            'code' => 41
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Potassium (K+)',
            'code' => 42
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Chloride (Cl-)',
            'code' => 43
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Bicarbonate (HCO3-)',
            'code' => 44
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Urea Nitrogen, Serum',
            'code' => 45
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Creatinine, Serum',
            'code' => 46
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Glucose, Random',
            'code' => 47
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Billirubin Direct',
            'code' => 48
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'GGT',
            'code' => 49
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Calcium',
            'code' => 50
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Magnesium',
            'code' => 51
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Phosphorous',
            'code' => 52
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Magnesium',
            'code' => 53
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'CK-MB',
            'code' => 54
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Ammonia',
            'code' => 55
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Glucose Fasting',
            'code' => 56
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Uric Acid Serum',
            'code' => 57
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Blood Alcohol Levels',
            'code' => 58
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Acetaminophen Levels',
            'code' => 59
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'ASA Levels',
            'code' => 60
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Beta-hCG, Quantitative',
            'code' => 61
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Cholesterol',
            'code' => 62
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Tryglycerides',
            'code' => 63
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Low Density LDL',
            'code' => 64
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'High Density HDL',
            'code' => 65
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IgA',
            'code' => 66
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IgE',
            'code' => 67
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IgG',
            'code' => 68
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IgM',
            'code' => 69
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Estriol',
            'code' => 70
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'FSH',
            'code' => 71
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'LH',
            'code' => 72
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'TSH',
            'code' => 73
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'T3',
            'code' => 74
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'T4',
            'code' => 75
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Growth Hormone',
            'code' => 76
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Prolactine',
            'code' => 77
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Cortisol Serum',
            'code' => 78
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'IGF-1',
            'code' => 79
        ]);
        DB::table('laboratory_types')->insert([
            'description' => 'Alpha-fetoprotein',
            'code' => 80
        ]);

    }
}
