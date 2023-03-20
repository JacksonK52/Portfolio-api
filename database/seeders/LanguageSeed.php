<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            // English US
            [
                'slug' => 'english_us-'.rand(1000, 9999).'-'.time(),
                'name' => 'English US',
                'remarks' => "
                    American English, sometimes called United States English or U.S. 
                    English is the set of varieties of the English language native to the United States.
                    English is the most widely spoken language in the United States and in most circumstances 
                    is the de facto common language used in government, education and commerce. Since the 20th century, 
                    American English has become the most influential form of English worldwide.
                ",
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            // English UK
            [
                'slug' => 'english_uk-'.rand(1000, 9999).'-'.time(),
                'name' => 'English UK',
                'remarks' => "
                    British English (BrE, en-GB, or BE) is, according to Oxford Dictionaries, 
                    'English as used in Great Britain, as distinct from that used elsewhere'. 
                    More narrowly, it can refer specifically to the English language in England, or, 
                    more broadly, to the collective dialects of English throughout the British Isles taken as a 
                    single umbrella variety, for instance additionally incorporating Scottish English, 
                    Welsh English, and Northern Irish English. Tom McArthur in the Oxford Guide to World 
                    English acknowledges that British English shares 'all the ambiguities and tensions [with] 
                    the word 'British' and as a result can be used and interpreted in two ways, more broadly 
                    or more narrowly, within a range of blurring and ambiguity'.
                ",
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            // Meitei Lon
            [
                'slug' => 'meitei_lon-'.rand(1000, 9999).'-'.time(),
                'name' => 'Meitei Lon',
                'remarks' => "
                    Meitei Lon also known as Manipuri is a Tibeto-Burman language of northeast India. 
                    It is spoken by around 1.8 million people, predominantly in the state of Manipur, 
                    but also by smaller communities in the rest of the country and in parts of neighbouring 
                    Myanmar and Bangladesh. It is native to the Meitei people, and within Manipur, it serves 
                    as an official language and a lingua franca. It was used as a court language in the 
                    historic Manipur Kingdom and is presently included among the 22 scheduled languages of India.
                ",
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            // Assamese
            [
                'slug' => 'assamese-'.rand(1000, 9999).'-'.time(),
                'name' => 'Assamese',
                'remarks' => "
                    Assamese also Asamiya is an Indo-Aryan language spoken mainly in the north-eastern 
                    Indian state of Assam, where it is an official language, and it serves as a lingua 
                    franca of the wider region. The easternmost Indo-Iranian language, it has over 15 
                    million speakers according to Ethnologue.
                ",
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
        ];

        Language::insert($languages);
    }
}
