<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('guest')->delete();
        
        DB::table('guest')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aditya R',
                'sesi' => 2,
                'slug' => 'aditya-r',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Angga K',
                'sesi' => 2,
                'slug' => 'angga-k',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Paskalis Gunawan AW',
                'sesi' => 2,
                'slug' => 'paskalis-gunawan-aw',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Chatarina Rika',
                'sesi' => 2,
                'slug' => 'chatarina-rika',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Yustinus Andri',
                'sesi' => 2,
                'slug' => 'yustinus-andri',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bella Imelda',
                'sesi' => 2,
                'slug' => 'bella-imelda',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Monika Ananda',
                'sesi' => 2,
                'slug' => 'monika-ananda',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Aulia Latuconsina',
                'sesi' => 2,
                'slug' => 'aulia-latuconsina',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Adiatama WP',
                'sesi' => 2,
                'slug' => 'adiatama-wp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Berylian Isamu H',
                'sesi' => 2,
                'slug' => 'berylian-isamu-h',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Friska Putri S',
                'sesi' => 2,
                'slug' => 'friska-putri-s',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Gracia Henreita',
                'sesi' => 2,
                'slug' => 'gracia-henreita',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Halimah Larasati',
                'sesi' => 2,
                'slug' => 'halimah-larasati',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Kevin Chandra',
                'sesi' => 2,
                'slug' => 'kevin-chandra',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Kinasih Sekarlangit',
                'sesi' => 2,
                'slug' => 'kinasih-sekarlangit',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Laurencia Kirana',
                'sesi' => 2,
                'slug' => 'laurencia-kirana',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Marcella Arka',
                'sesi' => 2,
                'slug' => 'marcella-arka',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Mayang Puspitasari',
                'sesi' => 2,
                'slug' => 'mayang-puspitasari',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Noor Anjani',
                'sesi' => 2,
                'slug' => 'noor-anjani',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Raygian M.F Damai',
                'sesi' => 2,
                'slug' => 'raygian-mf-damai',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Dani Hrd',
                'sesi' => 2,
                'slug' => 'dani-hrd',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Agung Setia B - Nadya R.',
                'sesi' => 2,
                'slug' => 'agung-setia-b-nadya-r',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Dewangga P',
                'sesi' => 2,
                'slug' => 'dewangga-p',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Dzul Faqar',
                'sesi' => 2,
                'slug' => 'dzul-faqar',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Irfan G - Regita',
                'sesi' => 2,
                'slug' => 'irfan-g-regita',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Istiana F',
                'sesi' => 2,
                'slug' => 'istiana-f',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Karina R',
                'sesi' => 2,
                'slug' => 'karina-r',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Nurul Arifiani',
                'sesi' => 2,
                'slug' => 'nurul-arifiani',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Trengginas Akbar',
                'sesi' => 2,
                'slug' => 'trengginas-akbar',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Arsy W - Haidar Ali',
                'sesi' => 2,
                'slug' => 'arsy-w-haidar-ali',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Handy Akbar',
                'sesi' => 2,
                'slug' => 'handy-akbar',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Rafika F',
                'sesi' => 2,
                'slug' => 'rafika-f',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Viska',
                'sesi' => 2,
                'slug' => 'viska',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Michelle Amadeus',
                'sesi' => 2,
                'slug' => 'michelle-amadeus',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'F. Gilang W',
                'sesi' => 2,
                'slug' => 'f-gilang-w',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Lydia Handini',
                'sesi' => 2,
                'slug' => 'lydia-handini',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Juliet Poli',
                'sesi' => 2,
                'slug' => 'juliet-poli',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Agatha Regina',
                'sesi' => 2,
                'slug' => 'agatha-regina',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Kurnia Handoko',
                'sesi' => 2,
                'slug' => 'kurnia-handoko',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Gabriel Nababan',
                'sesi' => 2,
                'slug' => 'gabriel-nababan',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Nathania Nanasari',
                'sesi' => 2,
                'slug' => 'nathania-nanasari',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Putri Mercy',
                'sesi' => 2,
                'slug' => 'putri-mercy',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Emi Louisa',
                'sesi' => 2,
                'slug' => 'emi-louisa',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Oditania Maharani',
                'sesi' => 2,
                'slug' => 'oditania-maharani',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Valent Vasti',
                'sesi' => 2,
                'slug' => 'valent-vasti',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Natania Valentine',
                'sesi' => 2,
                'slug' => 'natania-valentine',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Fransiskus Galih',
                'sesi' => 2,
                'slug' => 'fransiskus-galih',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Heribertus Agnus Dei',
                'sesi' => 2,
                'slug' => 'heribertus-agnus-dei',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Andreas Gelar',
                'sesi' => 2,
                'slug' => 'andreas-gelar',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Yulius Willy - Regina C',
                'sesi' => 2,
                'slug' => 'yulius-willy-regina-c',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Satrya Lintang',
                'sesi' => 2,
                'slug' => 'satrya-lintang',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Ragilia Ramadhani',
                'sesi' => 2,
                'slug' => 'ragilia-ramadhani',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Muhammad Akbar',
                'sesi' => 2,
                'slug' => 'muhammad-akbar',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Rimau Nusa Alam',
                'sesi' => 2,
                'slug' => 'rimau-nusa-alam',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Gunung Adi Wibowo',
                'sesi' => 2,
                'slug' => 'gunung-adi-wibowo',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Dimas Herdinata',
                'sesi' => 2,
                'slug' => 'dimas-herdinata',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Sutarno',
                'sesi' => 1,
                'slug' => 'sutarno',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Katmo - Sumiatik',
                'sesi' => 1,
                'slug' => 'katmo-sumiatik',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Sr Heriberta',
                'sesi' => 1,
                'slug' => 'sr-heriberta',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Gianto',
                'sesi' => 1,
                'slug' => 'gianto',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Yohannes Wiratmoko',
                'sesi' => 1,
                'slug' => 'yohannes-wiratmoko',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Zhita Sedya R',
                'sesi' => 1,
                'slug' => 'zhita-sedya-r',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Yustinus Budi Astanto',
                'sesi' => 1,
                'slug' => 'yustinus-budi-astanto',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Theresia Dwi Utami',
                'sesi' => 1,
                'slug' => 'theresia-dwi-utami',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Caecilia Yeni',
                'sesi' => 1,
                'slug' => 'caecilia-yeni',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Maria Wuri',
                'sesi' => 1,
                'slug' => 'maria-wuri',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Emmanuel Hari S',
                'sesi' => 1,
                'slug' => 'emmanuel-hari-s',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Antonius Ari P',
                'sesi' => 1,
                'slug' => 'antonius-ari-p',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Vicktor Kurnia',
                'sesi' => 1,
                'slug' => 'vicktor-kurnia',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Mbah Edok',
                'sesi' => 1,
                'slug' => 'mbah-edok',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Jese Okto Marbun',
                'sesi' => 1,
                'slug' => 'jese-okto-marbun',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Rudi Kristanto Astra',
                'sesi' => 1,
                'slug' => 'rudi-kristanto-astra',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'mbak sri',
                'sesi' => 1,
                'slug' => 'mbak-sri',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'mbak gunti-Adi',
                'sesi' => 1,
                'slug' => 'mbak-gunti-adi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'mbak wandiyah-Bakir',
                'sesi' => 1,
                'slug' => 'mbak-wandiyah-bakir',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'mbah sukarto',
                'sesi' => 1,
                'slug' => 'mbah-sukarto',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'bulik nur',
                'sesi' => 1,
                'slug' => 'bulik-nur',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'bulik santi',
                'sesi' => 1,
                'slug' => 'bulik-santi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'bulik hanna',
                'sesi' => 1,
                'slug' => 'bulik-hanna',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'mbah wiyono',
                'sesi' => 1,
                'slug' => 'mbah-wiyono',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Watik pak de Juki',
                'sesi' => 1,
                'slug' => 'watik-pak-de-juki',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'lik mus',
                'sesi' => 1,
                'slug' => 'lik-mus',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'om jun',
                'sesi' => 1,
                'slug' => 'om-jun',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'mbah sugiyo',
                'sesi' => 1,
                'slug' => 'mbah-sugiyo',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Ngatirah, Dr, MP.',
                'sesi' => 1,
                'slug' => 'ngatirah-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Gani Supriyanto, Ir, MP',
                'sesi' => 1,
                'slug' => 'gani-supriyanto-ir-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Arief Ika U., STP, MP',
                'sesi' => 1,
                'slug' => 'arief-ika-u-stp-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Reza , STP, MSc',
                'sesi' => 1,
                'slug' => 'reza-stp-msc',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Hermantoro, Dr, MP',
                'sesi' => 1,
                'slug' => 'hermantoro-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Sushardi, Dr. MP',
                'sesi' => 1,
                'slug' => 'sushardi-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Nuraeni Dwi D., Ir, MP - Drs. Suparman, MM',
                'sesi' => 1,
                'slug' => 'nuraeni-dwi-d-ir-mp-drs-suparman-mm',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Priyambodo, Ir. MP',
                'sesi' => 1,
                'slug' => 'priyambodo-ir-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Kuni Faziah, ST, MSc. -Valensi K.,, Dr. MP',
                'sesi' => 1,
                'slug' => 'kuni-faziah-st-msc-valensi-k-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Rengga A., STP, M.Eng.',
                'sesi' => 1,
                'slug' => 'rengga-a-stp-meng',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Harsunu Purwoto, Ir, M.Eng.',
                'sesi' => 1,
                'slug' => 'harsunu-purwoto-ir-meng',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Teddy Suparyanto, SPd, MTI',
                'sesi' => 1,
                'slug' => 'teddy-suparyanto-spd-mti',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Seno Anjaryomo, Ir.',
                'sesi' => 1,
                'slug' => 'seno-anjaryomo-ir',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Budi Rahardjo, Prof, Dr.',
                'sesi' => 1,
                'slug' => 'budi-rahardjo-prof-dr',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Sentot Purboseno, Dr, M.Eng',
                'sesi' => 1,
                'slug' => 'sentot-purboseno-dr-meng',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'M. P. Bimantya, ST, M.Eng',
                'sesi' => 1,
                'slug' => 'm-p-bimantya-st-meng',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Reni Astuti, Ir, MT',
                'sesi' => 1,
                'slug' => 'reni-astuti-ir-mt',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Herawati, ST, MSc.',
                'sesi' => 1,
                'slug' => 'herawati-st-msc',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Monica, Ssos, MSc',
                'sesi' => 1,
                'slug' => 'monica-ssos-msc',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Sunardi, Ir., MSc.',
                'sesi' => 1,
                'slug' => 'sunardi-ir-msc',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Erista Adisetya, Ir, MM',
                'sesi' => 1,
                'slug' => 'erista-adisetya-ir-mm',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Kusumastuti, Ir, MSc.',
                'sesi' => 1,
                'slug' => 'kusumastuti-ir-msc',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Dina Mardatilah, STP, MSc.',
                'sesi' => 1,
                'slug' => 'dina-mardatilah-stp-msc',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Harsawardhana, Dr. M.Eng.',
                'sesi' => 1,
                'slug' => 'harsawardhana-dr-meng',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Maria Ulfah, Dr., MP.',
                'sesi' => 1,
                'slug' => 'maria-ulfah-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Dyah Ully P., SP,MP.',
                'sesi' => 1,
                'slug' => 'dyah-ully-p-spmp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Fariha W., ST, PhD',
                'sesi' => 1,
                'slug' => 'fariha-w-st-phd',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Endar S., SP, MP',
                'sesi' => 1,
                'slug' => 'endar-s-sp-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Adi Ruswanto, Dr., MP.',
                'sesi' => 1,
                'slug' => 'adi-ruswanto-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Samsuri T., SP, MP.',
                'sesi' => 1,
                'slug' => 'samsuri-t-sp-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Rawana, Dr., MP.',
                'sesi' => 1,
                'slug' => 'rawana-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Helmi S., SSos, MIP',
                'sesi' => 1,
                'slug' => 'helmi-s-ssos-mip',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Retni M. H, Ir., MP.',
                'sesi' => 1,
                'slug' => 'retni-m-h-ir-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Herry Wirianata, Dr, Ir.',
                'sesi' => 1,
                'slug' => 'herry-wirianata-dr-ir',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Purwadi, Dr,Ir.',
                'sesi' => 1,
                'slug' => 'purwadi-drir',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Abdul Muin, Ir, MP',
                'sesi' => 1,
                'slug' => 'abdul-muin-ir-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Chandra Ginting, Dr, Ir, MP',
                'sesi' => 1,
                'slug' => 'chandra-ginting-dr-ir-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Danang Manumono, Dr, Ir, MP',
                'sesi' => 1,
                'slug' => 'danang-manumono-dr-ir-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Arum Ambarwati, Ir, MP',
                'sesi' => 1,
                'slug' => 'arum-ambarwati-ir-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Nanik Kristalisasi, SP, MP',
                'sesi' => 1,
                'slug' => 'nanik-kristalisasi-sp-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Dimas Deworo P, Dr, MP',
                'sesi' => 1,
                'slug' => 'dimas-deworo-p-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Tri Nugroho B.S, Ir,MP.',
                'sesi' => 1,
                'slug' => 'tri-nugroho-bs-irmp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Darul Falah, Ir,MP',
                'sesi' => 1,
                'slug' => 'darul-falah-irmp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Didik Suryahadi, SHut, MP',
                'sesi' => 1,
                'slug' => 'didik-suryahadi-shut-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Agus Priyono, SHut, MP',
                'sesi' => 1,
                'slug' => 'agus-priyono-shut-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Siman Suwaji, SHut, MP',
                'sesi' => 1,
                'slug' => 'siman-suwaji-shut-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Hastanto, SHut, MP',
                'sesi' => 1,
                'slug' => 'hastanto-shut-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Sri Hastuti, Ir, MP.',
                'sesi' => 1,
                'slug' => 'sri-hastuti-ir-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Maria Astuti, Dr., MP',
                'sesi' => 1,
                'slug' => 'maria-astuti-dr-mp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Rudianti',
                'sesi' => 1,
                'slug' => 'rudianti',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Khotimah',
                'sesi' => 1,
                'slug' => 'khotimah',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Sulaeman',
                'sesi' => 1,
                'slug' => 'sulaeman',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Tamma',
                'sesi' => 1,
                'slug' => 'tamma',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Margino',
                'sesi' => 1,
                'slug' => 'margino',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Murjito',
                'sesi' => 1,
                'slug' => 'murjito',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'sumadiyono',
                'sesi' => 1,
                'slug' => 'sumadiyono',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Ahmadi',
                'sesi' => 1,
                'slug' => 'ahmadi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Eni Lab THP',
                'sesi' => 1,
                'slug' => 'eni-lab-thp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Sofyan',
                'sesi' => 1,
                'slug' => 'sofyan',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Dwiki',
                'sesi' => 1,
                'slug' => 'dwiki',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Sri Gunawan, Dr., SP,MP.',
                'sesi' => 1,
                'slug' => 'sri-gunawan-dr-spmp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Idum S Santi, SP,MP',
                'sesi' => 1,
                'slug' => 'idum-s-santi-spmp',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Yanistra Allanto',
                'sesi' => 1,
                'slug' => 'yanistra-allanto',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            147 => 
            array (
                'id' => 148,
            'name' => 'Latief Wrstyawan (Jandu), Ir., MSi.',
                'sesi' => 1,
                'slug' => 'latief-wrstyawan-jandu-ir-msi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Eka Suhartanto, Ir, MSi',
                'sesi' => 1,
                'slug' => 'eka-suhartanto-ir-msi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Agung Jombor',
                'sesi' => 1,
                'slug' => 'agung-jombor',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'pak harto selobayan',
                'sesi' => 1,
                'slug' => 'pak-harto-selobayan',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'tutik tentrem',
                'sesi' => 1,
                'slug' => 'tutik-tentrem',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'yanto',
                'sesi' => 1,
                'slug' => 'yanto',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Trimo Balangan',
                'sesi' => 1,
                'slug' => 'trimo-balangan',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'bulik nuning',
                'sesi' => 1,
                'slug' => 'bulik-nuning',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'om giyoto',
                'sesi' => 1,
                'slug' => 'om-giyoto',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'mb Atik sragen',
                'sesi' => 1,
                'slug' => 'mb-atik-sragen',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'bulek Anik',
                'sesi' => 1,
                'slug' => 'bulek-anik',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'pak Nano',
                'sesi' => 1,
                'slug' => 'pak-nano',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Purdadi',
                'sesi' => 1,
                'slug' => 'purdadi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'eyang',
                'sesi' => 1,
                'slug' => 'eyang',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'mamah dewi',
                'sesi' => 1,
                'slug' => 'mamah-dewi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Pradhana Hanggarjita',
                'sesi' => 1,
                'slug' => 'pradhana-hanggarjita',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'N. Adi Sutoko-evy',
                'sesi' => 1,
                'slug' => 'n-adi-sutoko-evy',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'mbah om toko',
                'sesi' => 1,
                'slug' => 'mbah-om-toko',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Monthit-Deny om toko',
                'sesi' => 1,
                'slug' => 'monthit-deny-om-toko',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Budi adike om toko',
                'sesi' => 1,
                'slug' => 'budi-adike-om-toko',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            167 => 
            array (
                'id' => 169,
                'name' => 'Sukar',
                'sesi' => 1,
                'slug' => 'sukar',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            168 => 
            array (
                'id' => 170,
                'name' => 'Karsih',
                'sesi' => 1,
                'slug' => 'karsih',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            169 => 
            array (
                'id' => 171,
                'name' => 'G. Sukartono, Griya Palem',
                'sesi' => 1,
                'slug' => 'g-sukartono-griya-palem',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            170 => 
            array (
                'id' => 172,
                'name' => 'Haryono karangwaru',
                'sesi' => 1,
                'slug' => 'haryono-karangwaru',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            171 => 
            array (
                'id' => 173,
                'name' => 'Nia karangwaru',
                'sesi' => 1,
                'slug' => 'nia-karangwaru',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            172 => 
            array (
                'id' => 174,
                'name' => 'Syukur',
                'sesi' => 1,
                'slug' => 'syukur',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            173 => 
            array (
                'id' => 175,
                'name' => 'Turahsih',
                'sesi' => 1,
                'slug' => 'turahsih',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            174 => 
            array (
                'id' => 176,
                'name' => 'Endah Sigit',
                'sesi' => 1,
                'slug' => 'endah-sigit',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            175 => 
            array (
                'id' => 177,
                'name' => 'Hendarti',
                'sesi' => 1,
                'slug' => 'hendarti',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            176 => 
            array (
                'id' => 178,
                'name' => 'Heru Atmono',
                'sesi' => 1,
                'slug' => 'heru-atmono',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            177 => 
            array (
                'id' => 179,
                'name' => 'Agung Prasetyo',
                'sesi' => 1,
                'slug' => 'agung-prasetyo',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            178 => 
            array (
                'id' => 180,
                'name' => 'Sulung Iswandari',
                'sesi' => 1,
                'slug' => 'sulung-iswandari',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            179 => 
            array (
                'id' => 181,
                'name' => 'Purnomo',
                'sesi' => 1,
                'slug' => 'purnomo',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            180 => 
            array (
                'id' => 182,
                'name' => 'Untoro',
                'sesi' => 1,
                'slug' => 'untoro',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            181 => 
            array (
                'id' => 183,
                'name' => 'H Suyatno',
                'sesi' => 1,
                'slug' => 'h-suyatno',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            182 => 
            array (
                'id' => 184,
                'name' => 'is supriyanto',
                'sesi' => 1,
                'slug' => 'is-supriyanto',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            183 => 
            array (
                'id' => 185,
                'name' => 'Andri Yaya',
                'sesi' => 1,
                'slug' => 'andri-yaya',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            184 => 
            array (
                'id' => 186,
                'name' => 'Sugiyarso',
                'sesi' => 1,
                'slug' => 'sugiyarso',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            185 => 
            array (
                'id' => 187,
                'name' => 'Martono',
                'sesi' => 1,
                'slug' => 'martono',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            186 => 
            array (
                'id' => 188,
                'name' => 'Faeka',
                'sesi' => 1,
                'slug' => 'faeka',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            187 => 
            array (
                'id' => 189,
                'name' => 'Basuki',
                'sesi' => 1,
                'slug' => 'basuki',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            188 => 
            array (
                'id' => 190,
                'name' => 'Ulya',
                'sesi' => 1,
                'slug' => 'ulya',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            189 => 
            array (
                'id' => 191,
                'name' => 'Sutopo Yuwono, ngabean',
                'sesi' => 1,
                'slug' => 'sutopo-yuwono-ngabean',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            190 => 
            array (
                'id' => 192,
                'name' => 'Ponco - Rin Smrg',
                'sesi' => 1,
                'slug' => 'ponco-rin-smrg',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            191 => 
            array (
                'id' => 193,
                'name' => 'Andi-Heni Kauman Ngawi',
                'sesi' => 1,
                'slug' => 'andi-heni-kauman-ngawi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            192 => 
            array (
                'id' => 194,
                'name' => 'Yanti, sragen',
                'sesi' => 1,
                'slug' => 'yanti-sragen',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            193 => 
            array (
                'id' => 195,
                'name' => 'Amir mb Marni',
                'sesi' => 1,
                'slug' => 'amir-mb-marni',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            194 => 
            array (
                'id' => 196,
                'name' => 'eyang Wis Smrg',
                'sesi' => 1,
                'slug' => 'eyang-wis-smrg',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            195 => 
            array (
                'id' => 197,
                'name' => 'Nanik, Kauman Ngawi',
                'sesi' => 1,
                'slug' => 'nanik-kauman-ngawi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            196 => 
            array (
                'id' => 198,
                'name' => 'Winahyu M, Prambanan',
                'sesi' => 1,
                'slug' => 'winahyu-m-prambanan',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            197 => 
            array (
                'id' => 199,
                'name' => 'Esti Sumardi',
                'sesi' => 1,
                'slug' => 'esti-sumardi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            198 => 
            array (
                'id' => 200,
                'name' => 'Gogo Sumardi',
                'sesi' => 1,
                'slug' => 'gogo-sumardi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            199 => 
            array (
                'id' => 201,
                'name' => 'Agung Rita',
                'sesi' => 1,
                'slug' => 'agung-rita',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            200 => 
            array (
                'id' => 202,
                'name' => 'Krisbanardi',
                'sesi' => 1,
                'slug' => 'krisbanardi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            201 => 
            array (
                'id' => 203,
                'name' => 'Sendy-Wahyu',
                'sesi' => 1,
                'slug' => 'sendy-wahyu',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            202 => 
            array (
                'id' => 204,
                'name' => 'Marendra-Linda',
                'sesi' => 1,
                'slug' => 'marendra-linda',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            203 => 
            array (
                'id' => 205,
                'name' => 'Bartha',
                'sesi' => 1,
                'slug' => 'bartha',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            204 => 
            array (
                'id' => 206,
                'name' => 'Darmadi dr Kris',
                'sesi' => 1,
                'slug' => 'darmadi-dr-kris',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            205 => 
            array (
                'id' => 207,
                'name' => 'Lina',
                'sesi' => 1,
                'slug' => 'lina',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            206 => 
            array (
                'id' => 208,
                'name' => 'Saiman',
                'sesi' => 1,
                'slug' => 'saiman',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            207 => 
            array (
                'id' => 209,
                'name' => 'antok',
                'sesi' => 1,
                'slug' => 'antok',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            208 => 
            array (
                'id' => 210,
                'name' => 'Kahono',
                'sesi' => 1,
                'slug' => 'kahono',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            209 => 
            array (
                'id' => 211,
                'name' => 'Kun Dodi',
                'sesi' => 1,
                'slug' => 'kun-dodi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            210 => 
            array (
                'id' => 212,
                'name' => 'Bambang N',
                'sesi' => 1,
                'slug' => 'bambang-n',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            211 => 
            array (
                'id' => 213,
                'name' => 'Budi Thole',
                'sesi' => 1,
                'slug' => 'budi-thole',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            212 => 
            array (
                'id' => 214,
                'name' => 'Topo Yuwono',
                'sesi' => 1,
                'slug' => 'topo-yuwono',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            213 => 
            array (
                'id' => 215,
                'name' => 'Bu Tutik Kelik',
                'sesi' => 1,
                'slug' => 'bu-tutik-kelik',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            214 => 
            array (
                'id' => 216,
                'name' => 'Tri Wusono',
                'sesi' => 1,
                'slug' => 'tri-wusono',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            215 => 
            array (
                'id' => 217,
                'name' => 'Debora Surajiyah',
                'sesi' => 1,
                'slug' => 'debora-surajiyah',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            216 => 
            array (
                'id' => 218,
                'name' => 'Yustina Murni',
                'sesi' => 1,
                'slug' => 'yustina-murni',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            217 => 
            array (
                'id' => 219,
                'name' => 'Tunggul',
                'sesi' => 1,
                'slug' => 'tunggul',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            218 => 
            array (
                'id' => 220,
                'name' => 'Nugroho',
                'sesi' => 1,
                'slug' => 'nugroho',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            219 => 
            array (
                'id' => 221,
                'name' => 'Bp G. Sri Nurhartanto, Dr., MH.',
                'sesi' => 1,
                'slug' => 'bp-g-sri-nurhartanto-dr-mh',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            220 => 
            array (
                'id' => 222,
                'name' => 'Ib. Felasari, PhD',
                'sesi' => 1,
                'slug' => 'ib-felasari-phd',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            221 => 
            array (
                'id' => 223,
                'name' => 'Bp Samiaji Saroso, Dr.',
                'sesi' => 1,
                'slug' => 'bp-samiaji-saroso-dr',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            222 => 
            array (
                'id' => 224,
                'name' => 'Pak Yosep',
                'sesi' => 1,
                'slug' => 'pak-yosep',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            223 => 
            array (
                'id' => 225,
                'name' => 'Pak Sigit',
                'sesi' => 1,
                'slug' => 'pak-sigit',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            224 => 
            array (
                'id' => 226,
                'name' => 'pak Suryo',
                'sesi' => 1,
                'slug' => 'pak-suryo',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            225 => 
            array (
                'id' => 227,
                'name' => 'ignatius Agus Putranto, Drs,MSi.',
                'sesi' => 1,
                'slug' => 'ignatius-agus-putranto-drsmsi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            226 => 
            array (
                'id' => 228,
                'name' => 'bu rini',
                'sesi' => 1,
                'slug' => 'bu-rini',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            227 => 
            array (
                'id' => 229,
                'name' => 'mb ela',
                'sesi' => 1,
                'slug' => 'mb-ela',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            228 => 
            array (
                'id' => 230,
                'name' => 'mas billy',
                'sesi' => 1,
                'slug' => 'mas-billy',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            229 => 
            array (
                'id' => 231,
                'name' => 'Bu Niken',
                'sesi' => 1,
                'slug' => 'bu-niken',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            230 => 
            array (
                'id' => 232,
                'name' => 'pak titing',
                'sesi' => 1,
                'slug' => 'pak-titing',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:46',
            ),
            231 => 
            array (
                'id' => 233,
                'name' => 'pak Ho Wijayanto',
                'sesi' => 1,
                'slug' => 'pak-ho-wijayanto',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            232 => 
            array (
                'id' => 234,
                'name' => 'pak Lolly Tetool',
                'sesi' => 1,
                'slug' => 'pak-lolly-tetool',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            233 => 
            array (
                'id' => 235,
                'name' => 'Ig. Luddy Indra P, Dr, Ir,MT',
                'sesi' => 1,
                'slug' => 'ig-luddy-indra-p-dr-irmt',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            234 => 
            array (
                'id' => 236,
                'name' => 'Irya Wisnubhadra, Dr,Ir, MT',
                'sesi' => 1,
                'slug' => 'irya-wisnubhadra-drir-mt',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            235 => 
            array (
                'id' => 237,
                'name' => 'Marjuki',
                'sesi' => 1,
                'slug' => 'marjuki',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            236 => 
            array (
                'id' => 238,
                'name' => 'bambang roti',
                'sesi' => 1,
                'slug' => 'bambang-roti',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            237 => 
            array (
                'id' => 239,
                'name' => 'Nanik Wahyudi',
                'sesi' => 1,
                'slug' => 'nanik-wahyudi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            238 => 
            array (
                'id' => 240,
                'name' => 'Nur-Peni',
                'sesi' => 1,
                'slug' => 'nur-peni',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            239 => 
            array (
                'id' => 241,
                'name' => 'Yanetha Astrid',
                'sesi' => 1,
                'slug' => 'yanetha-astrid',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            240 => 
            array (
                'id' => 242,
                'name' => 'Moeren Fujiana',
                'sesi' => 1,
                'slug' => 'moeren-fujiana',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            241 => 
            array (
                'id' => 243,
                'name' => 'Wiwin - Dina',
                'sesi' => 1,
                'slug' => 'wiwin-dina',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            242 => 
            array (
                'id' => 244,
                'name' => 'pakde Mardi',
                'sesi' => 1,
                'slug' => 'pakde-mardi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            243 => 
            array (
                'id' => 245,
                'name' => 'Isol Jogja',
                'sesi' => 2,
                'slug' => 'isol-jogja',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            244 => 
            array (
                'id' => 246,
                'name' => 'Mbak suprih',
                'sesi' => 1,
                'slug' => 'mbak-suprih',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            245 => 
            array (
                'id' => 247,
                'name' => 'Prodiakon dan ketua ling kadipiro',
                'sesi' => 1,
                'slug' => 'prodiakon-dan-ketua-ling-kadipiro',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            246 => 
            array (
                'id' => 248,
                'name' => 'IPH',
                'sesi' => 2,
                'slug' => 'iph',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
            247 => 
            array (
                'id' => 249,
            'name' => 'pak Andhika - bu Vibry (saksi)',
                'sesi' => 2,
                'slug' => 'pak-andhika-bu-vibry-saksi',
                'created_at' => NULL,
                'updated_at' => '2024-05-14 15:56:47',
            ),
        ));
        
        
    }
}