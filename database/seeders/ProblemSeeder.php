<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Problem type primero
        DB::table('problems_type')->insert([
            'id' => 1,
            'code' => 1,
            'description' => 'Cholecystitis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 2,
            'code' => 2,
            'description' => 'Choledocholithiasis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 3,
            'code' => 3,
            'description' => 'Diarrhea Infectious'
        ]);
        DB::table('problems_type')->insert([
            'id' => 4,
            'code' => 4,
            'description' => 'Ulcerative Colitis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 5,
            'code' => 5,
            'description' => 'Crohn’s Disease'
        ]);
        DB::table('problems_type')->insert([
            'id' => 6,
            'code' => 6,
            'description' => 'Dysphagia'
        ]);
        DB::table('problems_type')->insert([
            'id' => 7,
            'code' => 7,
            'description' => 'Esophageal obstruction'
        ]);
        DB::table('problems_type')->insert([
            'id' => 8,
            'code' => 8,
            'description' => 'Gastroesophageal reflux disease'
        ]);
        DB::table('problems_type')->insert([
            'id' => 9,
            'code' => 9,
            'description' => 'Colon cancer'
        ]);
        DB::table('problems_type')->insert([
            'id' => 10,
            'code' => 10,
            'description' => 'Intestinal polyp benign'
        ]);
        DB::table('problems_type')->insert([
            'id' => 11,
            'code' => 11,
            'description' => 'Viral hepatitis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 12,
            'code' => 12,
            'description' => 'Appendicitis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 13,
            'code' => 13,
            'description' => 'Pseudocyst of pancreas'
        ]);
        DB::table('problems_type')->insert([
            'id' => 14,
            'code' => 14,
            'description' => 'Diaphragmatic hernia'
        ]);
        DB::table('problems_type')->insert([
            'id' => 15,
            'code' => 15,
            'description' => 'Alcoholic cirrhosis of liver without ascites'
        ]);
        DB::table('problems_type')->insert([
            'id' => 16,
            'code' => 16,
            'description' => 'Alcoholic cirrhosis of liver with ascites'
        ]);
        DB::table('problems_type')->insert([
            'id' => 17,
            'code' => 17,
            'description' => 'Acute pyelonephritis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 18,
            'code' => 18,
            'description' => 'Calculus of kidney'
        ]);
        DB::table('problems_type')->insert([
            'id' => 19,
            'code' => 19,
            'description' => 'Calculus of ureter'
        ]);
        DB::table('problems_type')->insert([
            'id' => 20,
            'code' => 20,
            'description' => 'Acute cystitis with hematuria'
        ]);
        DB::table('problems_type')->insert([
            'id' => 21,
            'code' => 21,
            'description' => 'Epididymitis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 22,
            'code' => 22,
            'description' => 'Orchitis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 23,
            'code' => 23,
            'description' => 'Nephrotic syndrome'
        ]);
        DB::table('problems_type')->insert([
            'id' => 24,
            'code' => 24,
            'description' => 'Acute nephritic syndrome'
        ]);
        DB::table('problems_type')->insert([
            'id' => 25,
            'code' => 25,
            'description' => 'Interstitial cystitis with hematuria'
        ]);
        DB::table('problems_type')->insert([
            'id' => 26,
            'code' => 26,
            'description' => 'Interstitial cystitis without hematuria'
        ]);
        DB::table('problems_type')->insert([
            'id' => 27,
            'code' => 27,
            'description' => 'Diverticulum of bladder'
        ]);
        DB::table('problems_type')->insert([
            'id' => 28,
            'code' => 28,
            'description' => 'Stress incontinence'
        ]);
        DB::table('problems_type')->insert([
            'id' => 29,
            'code' => 29,
            'description' => 'Overflow incontinence'
        ]);
        DB::table('problems_type')->insert([
            'id' => 30,
            'code' => 30,
            'description' => 'Urinary retention'
        ]);
        DB::table('problems_type')->insert([
            'id' => 31,
            'code' => 31,
            'description' => 'Chronic kidney disease'
        ]);
        DB::table('problems_type')->insert([
            'id' => 32,
            'code' => 32,
            'description' => 'Type 1 diabetes mellitus'
        ]);
        DB::table('problems_type')->insert([
            'id' =>33,
            'code' => 33,
            'description' => 'Type 2 diabetes mellitus'
        ]);
        DB::table('problems_type')->insert([
            'id' => 34,
            'code' => 34,
            'description' => 'Diabetes insipidus'
        ]);
        DB::table('problems_type')->insert([
            'id' => 35,
            'code' => 35,
            'description' => 'Thyrotoxicosis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 36,
            'code' => 36,
            'description' => 'Hypothyroidism'
        ]);
        DB::table('problems_type')->insert([
            'id' => 37,
            'code' => 37,
            'description' => 'Sheehan’s Syndrome'
        ]);
        DB::table('problems_type')->insert([
            'id' => 38,
            'code' => 38,
            'description' => 'Myxedema coma'
        ]);
        DB::table('problems_type')->insert([
            'id' => 39,
            'code' => 39,
            'description' => 'Pregnancy'
        ]);
        DB::table('problems_type')->insert([
            'id' => 40,
            'code' => 40,
            'description' => 'Pituitary Apoplexy'
        ]);
        DB::table('problems_type')->insert([
            'id' => 41,
            'code' => 41,
            'description' => 'Diabetes Insipidus'
        ]);
        DB::table('problems_type')->insert([
            'id' => 42,
            'code' => 42,
            'description' => 'Lactation Difficulties(Problems with Latching on)'
        ]);
        DB::table('problems_type')->insert([
            'id' => 43,
            'code' => 43,
            'description' => 'Mastitis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 44,
            'code' => 44,
            'description' => 'Post-Partum Depression'
        ]);
        DB::table('problems_type')->insert([
            'id' => 45,
            'code' => 45,
            'description' => 'Lymphocytic Hypophysitis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 46,
            'code' => 46,
            'description' => 'Hyperlipidemia'
        ]);
        DB::table('problems_type')->insert([
            'id' => 47,
            'code' => 47,
            'description' => 'Cystic fibrosis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 48,
            'code' => 48,
            'description' => 'Hyperparathyroidism'
        ]);
        DB::table('problems_type')->insert([
            'id' => 49,
            'code' => 49,
            'description' => 'Threatened abortion'
        ]);
        DB::table('problems_type')->insert([
            'id' => 50,
            'code' => 50,
            'description' => 'Conjoined twins'
        ]);
        DB::table('problems_type')->insert([
            'id' => 51,
            'code' => 51,
            'description' => 'Gestational diabetes'
        ]);
        DB::table('problems_type')->insert([
            'id' => 52,
            'code' => 52,
            'description' => 'False labor'
        ]);
        DB::table('problems_type')->insert([
            'id' => 53,
            'code' => 53,
            'description' => 'HELLP syndrome'
        ]);
        DB::table('problems_type')->insert([
            'id' => 54,
            'code' => 54,
            'description' => 'Placenta previa'
        ]);
        DB::table('problems_type')->insert([
            'id' => 55,
            'code' => 55,
            'description' => 'Placental abruption'
        ]);
        DB::table('problems_type')->insert([
            'id' => 56,
            'code' => 56,
            'description' => 'Hydrops fetalis'
        ]);
        DB::table('problems_type')->insert([
            'id' => 57,
            'code' => 57,
            'description' => 'Hyperemesis gravidarum'
        ]);
        DB::table('problems_type')->insert([
            'id' => 58,
            'code' => 58,
            'description' => 'Ectopic pregnancy'
        ]);
        DB::table('problems_type')->insert([
            'id' => 59,
            'code' => 59,
            'description' => 'Intrauterine pregnancy single'
        ]);
        DB::table('problems_type')->insert([
            'id' => 60,
            'code' => 60,
            'description' => 'Major depressive disorder single episode'
        ]);
        DB::table('problems_type')->insert([
            'id' => 61,
            'code' => 61,
            'description' => 'Generalized anxiety disorder'
        ]);
        DB::table('problems_type')->insert([
            'id' => 62,
            'code' => 62,
            'description' => 'Anorexia nervosa'
        ]);
        DB::table('problems_type')->insert([
            'id' => 63,
            'code' => 63,
            'description' => 'Smoking cessation counseling'
        ]);
        DB::table('problems_type')->insert([
            'id' => 64,
            'code' => 64,
            'description' => 'Substance abuse'
        ]);
        DB::table('problems_type')->insert([
            'id' => 65,
            'code' => 65,
            'description' => 'Unsafe drinking behavior'
        ]);
        DB::table('problems_type')->insert([
            'id' => 66,
            'code' => 66,
            'description' => 'Oppositional defiant disorder'
        ]);
        DB::table('problems_type')->insert([
            'id' => 67,
            'code' => 67,
            'description' => 'Vascular dementia'
        ]);
        DB::table('problems_type')->insert([
            'id' => 68,
            'code' => 68,
            'description' => 'Lewy body dementia'
        ]);
        DB::table('problems_type')->insert([
            'id' => 69,
            'code' => 69,
            'description' => 'Alzheimer’s dementia'
        ]);


    }
}
