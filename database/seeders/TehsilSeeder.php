<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TehsilSeeder extends Seeder
{
    protected array $tehsils = [
        
        'Hub' => [
            'Hub',
            'Gaddani',
            'Sonmiani',
            'Sakran',
            'Dureji'
        ],
        'Kalat' => [
            'Kalat',
            'Mangochar',
            'Gazg',
            'Johan'
        ],
        'Khuzdar' => [
            'Khuzdar',
            'Nall',
            'Wadh',
            'Zehri',
        ],
        'Mastung' => [
            'Dasht Mastung',
            'Mastung',
            'Khad Koocha',
            'Kardigap'
        ],
        'Surab' => [
            'Surab'
        ],
        'Ziarat' => [
            'Ziarat',
            'Sinjavi'
        ],
        'Gwadar' => [
            'Gwadar',
            'Jiwani',
            'Ormara',
            'Pasni',
            'Suntsar'
        ],
        'Kech' => [
            'Mand',
            'Tump',
            'Turbat',
        ],
        'Panjgur' => [
            'Gowargo',
            'Panjgur',
            'Paroom',
            'Gichk'
        ],
        'Jafarabad' => [
            'Jafarabad',
            'Jhatpat'
        ],
        'Naseerabad' => [
            'Baba Kot',
            'Dera Murad Jamali',
            'Tamboo',
            'Chattar',
            'Meer Hassan'
        ],
        'Sohbatpur' => [
            'Faridabad',
            'Hayrvi',
            'Manjipur',
            'Sohbatpur'
        ],
        'Kachi' => [
            'Dhadar',
            'Balanari',
            'Khattan',
            'Mach',
            'Sani'
        ],
        'Jhal Magsi' => [
            'Gandawa',
            'Jhal Magsi',
            'Mirpur'
        ],
        'Chaman' => [
            'Chaman'
        ],
        'Pishin' => [
            'Barshore',
            'Hurramzai',
            'Pishin',
            'Saranan'
        ],
        'Quetta' => [
            'Chiltan',
            'Zarghoon',
            'Panjpai',
            'Sadar'
        ],
        'Qila Abdullah' => [
            'Gulistan',
            'Killa Abdullah',
            'Dobandi'
        ],
        'Dera Bugti' => [
            'Dera Bugti',
            'Phelawagh',
            'Sui',
            'Baiker'
        ],
        'Sibi' => [
            'Sibi',
            'Kutmandai',
            'Sangan'
        ],
        'Kohlu' => [
            'Kahan',
            'Kohlu',
            'Maiwand',
            'Tamboo',
            'Shaheed Jahangir Abad'
        ],
        'Harnai' => [
            'Harnai',
            'Shahrig',
            'Khoast'
        ],
        'Qila Saifullah' => [
            'Killa Saifullah',
            'Loiband',
            'Muslim Bagh',
            'Badini',
            'Kanmetharzai',
            'Shinki'
        ],
        'Sherani' => [
            'Sherani'
        ],
        'Zhob' => [
            'Qamar Din Karez',
            'Zhob',
            'Ashwat',
            'Kashatu',
            'Sambaza'
        ],
        'Duki' => [
            'Duki'
        ],
        'Musakhel' => [
            'Darug',
            'Kingri',
            'Musakhel',
            'Toisar'
        ],
        'Loralai' => [
            'Bori',
            'Mekhtar'
        ],
        'Barkhan' => [
            'Barkhan'
        ],
        'Chagai' => [
            'Dalbandin',
            'Nokundi',
            'Taftan',
            'Chagai',
            'Amuri',
            'Chilgazi'
        ],
        'Washuk' => [
            'Besima',
            'Mashkel',
            'Washuk',
            'Nag',
            'Shahgori'
        ],
        'Nushki' => [
            'Nushki',
            'Dak'
        ],
        'Kharan' => [
            'Kharan',
            'Sar-Kharan',
            'Tohumulk'
        ],
        'Bahawalnagar' => [
            'Bahawalnagar',
            'Chishtian',
            'Fort Abbas',
            'Haroonabad',
            'Minchinabad'
        ],
        'Bahawalpur' => [
            'Ahmadpur East',
            'Bahawalpur City',
            'Bahawalpur Saddar',
            'Hasilpur',
            'Khairpur Tamewali',
            'Yazman'
        ],
        'Rahim Yar Khan' => [
            'Khanpur',
            'Liaqatpur',
            'Rahim Yar Khan',
            'Sadiqabad'
        ],
        'Dera Ghazi Khan' => [
            'Dera Ghazi Khan',
            'De-Excluded Area D.G. Khan',
            'Kot Chutta'
        ],
        'Jampur' => [
            'Jampur',
            'Muhammadpur',
            'Dajal',
            'Tribal Area'
        ],
        'Layyah' => [
            'Chaubara',
            'Karor Lal Esan',
            'Layyah'
        ],
        'Muzaffargarh' => [
            'Alipur',
            'Jatoi',
            'Muzaffargarh'
        ],
        'Rajanpur' => [
            'Rajanpur',
            'Rojhan',
            'De-Excluded Area Rajanpur'
        ],
        'Taunsa' => [
            'Taunsa',
            'Koh-e-Suleman',
            'Vehova'
        ],
        'Kot Addu' => [
            'Kot Addu',
            'Chowk Sarwar Shaheed'
        ],
        'Chiniot' => [
            'Bhowana',
            'Chiniot',
            'Lalian'
        ],
        'Faisalabad' => [
            'Chak Jhumra',
            'Faisalabad City',
            'Faisalabad Sadar',
        ],
        'Jhang' => [
            'Jhang',
            'Shorkot',
            'Ahmadpur Sial',
            'Athara Hazari',
            'Mandi Shah Jeewna'
        ],
        'Toba Tek Singh' => [
            'Gojra',
            'Kamalia',
            'Pirmahal',
            'Toba Tek Singh'
        ],
        'Gujranwala' => [
            'Gujranwala City',
            'Gujranwala Saddar',
            'Kamoke',
            'Nowshera Virkan'
        ],
        'Narowal' => [
            'Narowal',
            'Shakargarh',
            'Zafarwal'
        ],
        'Sialkot' => [
            'Daska',
            'Pasrur',
            'Sambrial',
            'Sialkot'
        ],
        'Gujrat' => [
            'Gujrat',
            'Kharian',
            'Sarai Alamgir',
            'Jalalpur Jattan',
            'Kunjah'
        ],
        'Hafizabad' => [
            'Hafizabad',
            'Pindi Bhattian'
        ],
        'Mandi Bahauddin' => [
            'Malakwal',
            'Mandi Bahauddin',
            'Phalia'
        ],
        'Wazirabad' => [
            'Wazirabad',
            'Ali Pur Chatta'
        ],
        'Kasur' => [
            'Chunian',
            'Kasur',
            'Kot Radha Kishan',
            'Pattoki'
        ],
        'Lahore' => [
            'Lahore Cantonment',
            'Lahore City',
            'Model Town',
            'Raiwind',
        ],
        'Nankana Sahib' => [
            'Nankana Sahib',
            'Sangla Hill',
            'Shah Kot'
        ],
        'Sheikhupura' => [
            'Sheikhupura',
            'Sharak Pur'
        ],
        'Khanewal' => [
            'Jahanian',
            'Kabirwala',
            'Khanewal',
            'Mian Channu'
        ],
        'Lodhran' => [
            'Dunyapur',
            'Kahror Pacca',
            'Lodhran'
        ],
        'Multan' => [
            'Jalalpur Pirwala',
            'Multan City',
            'Multan Saddar',
            'Shujabad'
        ],
        'Vehari' => [
            'Jallah Jeem',
            'Burewala',
            'Mailsi',
            'Vehari'
        ],
        'Attock' => [
            'Attock',
            'Fateh Jang',
            'Hassan Abdal',
            'Hazro',
        ],
        'Chakwal' => [
            'Chakwal',
            'Choa Saidan Shah',
            'Kallar Kahar'
        ],
        'Jhelum' => [
            'Dina',
            'Jhelum',
            'Pind Dadan Khan',
            'Sohawa'
        ],
        'Rawalpindi' => [
            'Rawalpindi',
            'Gujar Khan',
            'Kahuta',
            'Kallar Syedan',
            'Taxila',
        ],
        'Murree' => [
            'Kotli Sattian',
            'Murree'
        ],
        'Okara' => [
            'Depalpur',
            'Okara',
            'Renala Khurd'
        ],
        'Sahiwal' => [
            'Chichawatni',
            'Sahiwal'
        ],
        'Khushab' => [
            'Khushab',
            'Noorpur Thal',
            'Quaidabad',
            'Naushera (Wadi-e-Soon)'
        ],
        'Sargodha' => [
            'Sahiwal',
            'Sargodha',
        ],
        'Bhakkar' => [
            'Bhakkar',
            'Darya Khan',
            'Kaloorkot',
            'Mankera'
        ],
        'Mianwali' => [
            'Isakhel',
            'Mianwali',
            'Piplan'
        ],
        'Talagang' => [
            'Talagang',
            'Lawa',
            'Multan Khurd'
        ],
        'Bannu' => [
            'Bannu',
            'Kakki',
            'Miryan',
            'Wazir'
        ],
        'Lakki Marwat' => [
            'Bettani',
            'Ghazni Khel',
            'Lakki Marwat',
            'Sari Naurang'
        ],
        'North Waziristan' => [
            'Ghulam Khan',
            'Mir Ali',
            'Miran Shah',
        ],
        'Dera Ismail Khan' => [
            'Daraban',
            'Darazinda',
            'Dera Ismail Khan',
        ],
        'Tank' => [
            'Jandola',
            'Tank',
            'Hazara'
        ],
        'Upper South Waziristan' => [
            'Ladha',
            'Makin',
            'Sararogha',
        ],
        'Lower South Waziristan' => [
            'Birmil',
            'Shakai',
            'Toi Khulla',
            'Wana'
        ],
        'Abbottabad' => [
            'Abbottabad',
            'Havelian',
            'Lora',
            'Lower Tanawal'
        ],
        'Allai' => [
            'Allai',
            'Batagram'
        ],
        'Battagram' => [
            'Ghazi',
            'Haripur',
            'Khanpur'
        ],
        'Haripur' => [
            'Kolai-Palas'
        ],
        'Kolai Palas' => [
            'Bataira / Kolai',
            'Palas'
        ],
        'Lower Kohistan' => [
            'Bankad',
            'Pattan'
        ],
        'Mansehra' => [
            'Baffa Pakhal',
            'Bala Kot',
            'Darband',
            'Mansehra',
        ],
        'Torghar' => [
            'Daur Maira',
            'Judba',
            'Khander Hassanzai'
        ],
        'Upper Kohistan' => [
            'Dassu',
            'Harban Basha',
            'Kandia',
            'Seo'
        ],
        'Hangu' => [
            'Doaba',
            'Hangu',
            'Tall'
        ],
        'Karak' => [
            'Banda Daud Shah',
            'Karak',
            'Takht-e-Nasrati'
        ],
        'Kohat' => [
            'Dara Adam Khel',
            'Gumbat',
            'Kohat',
            'Lachi'
        ],
        'Kurram' => [
            'Central Kurram',
            'Lower Kurram',
            'Upper Kurram'
        ],
        'Orakzai' => [
            'Central Orakzai',
            'Ismail Zai',
            'Lower Orakzai',
            'Upper Orakzai'
        ],
        'Bajaur' => [
            'Bar Chamarkand',
            'Barang',
            'Khar Bajaur',
            'Utman Khel'
        ],
        'Buner' => [
            'Chagharzai',
            'Daggar',
            'Gadezai',
            'Khudu Khel',
            'Mandanr'
        ],
        'Central Dir District' => [
            'Chitral',
            'Drosh'
        ],
        'Lower Dir' => [
            'Adenzai',
            'Balambat',
            'Samar Bagh',
            'Timergara'
        ],
        'Lower Chitral' => [
            'Sam Ranizai',
            'Swat Ranizai',
            'Thana Baizai',
            'Utman Khel'
        ],
        'Malakand' => [
            'Alpuri',
            'Bisham',
            'Chakesar',
            'Martung',
            'Makhuzai',
            'Shahpur',
            'Puran'
        ],
        'Shangla' => [
            'Babuzai',
            'Barikot',
            'Behrain',
            'Charbagh',
            'Kabal',
            'Khwaza Khela',
            'Matta'
        ],
        'Swat' => [
            'Buni',
            'Mulkhow',
            'Torkhow',
            'Mastuj'
        ],
        'Upper Dir' => [
            'Barawal',
            'Dir',
            'Kalkot',
            'Lar Jam',
            'Sharingal',
            'Wari'
        ],
        'Upper Chitral' => [
            'Charsadda',
            'Shabqadar',
            'Tangi'
        ],
        'Mardan' => [
            'Ghari Kapura',
            'Katlang',
            'Mardan',
            'Rustam',
            'Takht Bhai'
        ],
        'Swabi' => [
            'Lahor',
            'Razar',
            'Swabi',
            'Topi'
        ],
        'Charsadda' => [
            'Charsadda',
            'Shabqadar',
            'Tangi'
        ],
        'Khyber' => [
            'Bagh Maidan',
            'Bara',
            'Bazar Zakha Khel',
            'Fort Salop',
            'Jamrud',
            'Landi Kotal',
            'Mula Gori',
            'Painda Cheena'
        ],
        'Mohmand' => [
            'Ambar Utman Khel',
            'Halim Zai',
            'Pindiali',
            'Pran Ghar',
            'Safi',
            'Upper Mohmand',
            'Yake Ghund'
        ],
        'Nowshera' => [
            'Jehangira',
            'Nowshera',
            'Pabbi'
        ],
        'Peshawar' => [
            'Badbher',
            'Chamkani',
            'Hassan Khel',
            'Mathra',
            'Peshawar City',
            'Peshtakhara',
            'Shah Alam'
        ],
        'Ghizer' => [
            'Punial',
            'Ishkoman'
        ],
        'Gilgit' => [
            'Danyor',
            'Gilgit',
            'Juglot'
        ],
        'Hunza' => [
            'Aliabad',
            'Gojal'
        ],
        'Nagar' => [
            'Nagar',
            'Chalt'
        ],
        'Skardu' => [
            'Gultari',
            'Skardu',
            'Gamba',
            'Rondu'
        ],
        'Kharmang' => [
            'Kharmang'
        ],
        'Astore' => [
            'Astore',
            'Shounter'
        ],
        'Diamer' => [
            'Babusar',
            'Chilas',
        ],
        'Mirpur' => [
            'Dadyal',
            'Mirpur',
            'Islamgarh'
        ],
        'Bhimber' => [
            'Bhimber',
            'Barnala',
            'Samahni'
        ],
        'Kotli' => [
            'Kotli',
            'Khuiratta',
            'Fatehpur Thakiala',
        ],
        'Muzaffarabad' => [
            'Muzaffarabad',
            'Nasirbad'
        ],
        'Hattian Bala' => [
            'Hattian Bala',
            'Chikkar',
            'Leepa'
        ],
        'Neelum' => [
            'Athmuqam',
            'Sharda'
        ],
        'Poonch' => [
            'Bagh',
            'Dhirkot',
        ],
        'Bagh' => [
            'Bagh',
            'Dhirkot',
            'Hari Ghel',
            'Rera',
            'Birpani'
        ],
        'Haveli' => [
            'Haveli',
            'Khurshidabad',
            'Mumtazabad'
        ],
        'Badin' => [
            'Badin',
            'Khoski',
            'Matli',
        ],
        'Sujawal' => [
            'Jati',
            'Kharo Chan',
            'Mirpur Bathoro',
            'Shah Bandar',
            'Sujawal'
        ],
        'Thatta' => [
            'Ghorabari',
            'Keti Bunder',
            'Mirpur Sakro',
            'Thatta'
        ],
        'Dadu' => [
            'Dadu',
            'Johi',
            'Khairpur Nathan Shah',
            'Mehar'
        ],
        'Hyderabad' => [
            'Hyderabad City',
            'Hyderabad',
            'Latifabad',
            'Qasimabad'
        ],
        'Jamshoro' => [
            'Kotri',
            'Sehwan',
            'Manjhand',
            'Thana Bulla Khan'
        ],
        'Matiari' => [
            'Hala',
            'Matiari',
            'Saeedabad'
        ],
        'Tando Allahyar' => [
            'Chamber',
            'Jhando Mari',
            'Tando Allahyar',
            'Nasarpur'
        ],
        'Tando Muhammad Khan' => [
            'Bulri Shah Karim',
            'Tando Ghulam Hyder',
            'Tando Mohammad Khan'
        ],
        'Karachi Central' => [
            'Gulberg Town',
            'Liaquatabad Town',
            'New Karachi Town',
            'North Nazimabad Town',
            'Nazimabad',
            'North Karachi'
        ],
        'Karachi East' => [
            'Gulistan-e-Jouhar',
            'Gulshan Town',
            'Jamshed Town',
            'Ferozabad',
            'Gulshan-E-Iqbal',
            'Gulzar-E-Hijri'
        ],
        'Karachi South' => [
            'Lyari Town',
            'Saddar Town',
            'Aram Bagh',
            'Civil Line',
            'Garden'
        ],
        'Karachi West' => [
            'Orangi Town',
            'Manghopir',
            'Maripur',
            'Mominabad',
            'Ittehad town',
            'Baldia town'
        ],
        'Korangi' => [
            'Korangi Town',
            'Landhi Town',
            'Shah Faisal Town',
            'Model Colony'
        ],
        'Keamari' => [
            'Keamari Town',
            'Baldia Town',
            'S.I.T.E. Town',
            'Karachi Fish Harbour'
        ],
        'Malir' => [
            'Bin Qasim Town',
            'Gadap Town',
            'Malir Town',
            'Jinnah',
            'Ibrahim Hyderi',
            'Murad Memon',
            'Shah Murad'
        ],
        'Sukkur' => [
            'New Sukkur',
            'Pano Aqil',
            'Rohri',
            'Salehpat',
            'Sukkur'
        ],
        'Jacobabad' => [
            'Garhi Khairo',
            'Jacobabad',
            'Thul'
        ],
        'Kashmore' => [
            'Kandhkot',
            'Kashmore',
            'Tangwani'
        ],
        'Larkana' => [
            'Bakrani',
            'Dokri',
            'Larkana',
            'Ratodero'
        ],
        'Qambar Shahdadkot' => [
            'Mirokhan',
            'Shahdadkot',
            'Sijawal Junejo',
            'Warah'
        ],
        'Shikarpur' => [
            'Garhi Yasin',
            'Khanpur',
            'Lakhi',
            'Shikarpur'
        ],
        'Mirpur Khas' => [
            'Mirpur Khas',
            'Shujabad',
            'Sindhri'
        ],
        'Sanghar' => [
            'Jam Nawaz Ali',
            'Khipro',
            'Sanghar',
            'Shahdadpur',
            'Sinjhoro',
            'Tando Adam Khan'
        ]
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->tehsils as $district => $tehsils) {
            foreach ($tehsils as $tehsil) {
                \App\Models\Tehsil::create([
                    'name' => $tehsil,
                    'district_id' => $this->getDistrictId($district)
                ]);
            }
        }
    }

    private function getDistrictId(string $name) {
        return \App\Models\District::where('name', '=', $name)->first()->getAttribute('id');
    }
}
