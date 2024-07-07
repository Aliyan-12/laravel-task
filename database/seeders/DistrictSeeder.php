<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    protected array $districts = [
        'Kalat' => [
            'Awaran',
            'Hub',
            'Kalat',
            'Khuzdar',
            'Mastung',
            'Surab',
            'Ziarat'
        ],
        'Makran' => [
            'Gwadar',
            'Kech',
            'Panjgur'
        ],
        'Naseerabad' => [
            'Jafarabad',
            'Naseerabad',
            'Sohbatpur',
            'Kachi',
            'Jhal Magsi'
        ],
        'Quetta' => [
            'Chaman',
            'Pishin',
            'Quetta',
            'Qila Abdullah'
        ],
        'Sibi' => [
            'Dera Bugti',
            'Sibi',
            'Kohlu',
            'Harnai'
        ],
        'Zhob' => [
            'Qila Saifullah',
            'Sherani',
            'Zhob'
        ],
        'Loralai' => [
            'Duki',
            'Musakhel',
            'Loralai',
            'Barkhan'
        ],
        'Rakhshan' => [
            'Chagai',
            'Washuk',
            'Nushki',
            'Kharan'
        ],
        'Bahawalpur' => [
            'Bahawalnagar',
            'Bahawalpur',
            'Rahim Yar Khan'
        ],
        'Dera Ghazi Khan' => [
            'Dera Ghazi Khan',
            'Jampur',
            'Layyah',
            'Muzaffargarh',
            'Rajanpur',
            'Taunsa',
            'Kot Addu'
        ],
        'Faisalabad' => [
            'Chiniot',
            'Faisalabad',
            'Jhang',
            'Toba Tek Singh'
        ],
        'Gujranwala' => [
            'Gujranwala',
            'Narowal',
            'Sialkot'
        ],
        'Gujrat' => [
            'Gujrat',
            'Hafizabad',
            'Mandi Bahauddin',
            'Wazirabad'
        ],
        'Lahore' => [
            'Kasur',
            'Lahore',
            'Nankana Sahib',
            'Sheikhupura'
        ],
        'Mianwali' => [
            'Bhakkar',
            'Mianwali'
        ],
        'Multan' => [
            'Khanewal',
            'Lodhran',
            'Multan',
            'Vehari'
        ],
        'Rawalpindi' => [
            'Attock',
            'Chakwal',
            'Jhelum',
            'Rawalpindi',
            'Talagang',
            'Murree'
        ],
        'Sahiwal' => [
            'Okara',
            'Pakpattan',
            'Sahiwal'
        ],
        'Sargodha' => [
            'Khushab',
            'Sargodha'
        ],
        'Bannu' => [
            'Bannu',
            'Lakki Marwat',
            'North Waziristan'
        ],
        'Dera Ismail Khan' => [
            'Dera Ismail Khan',
            'Tank',
            'Upper South Waziristan',
            'Lower South Waziristan'
        ],
        'Hazara' => [
            'Abbottabad',
            'Allai',
            'Battagram',
            'Haripur',
            'Kolai Palas',
            'Lower Kohistan',
            'Mansehra',
            'Torghar',
            'Upper Kohistan'
        ],
        'Kohat' => [
            'Hangu',
            'Karak',
            'Kohat',
            'Kurram',
            'Orakzai'
        ],
        'Malakand' => [
            'Bajaur',
            'Buner',
            'Central Dir District',
            'Lower Dir',
            'Lower Chitral',
            'Malakand',
            'Shangla',
            'Swat',
            'Upper Dir',
            'Upper Chitral'
        ],
        'Mardan' => [
            'Mardan',
            'Swabi'
        ],
        'Peshawar' => [
            'Charsadda',
            'Khyber',
            'Mohmand',
            'Nowshera',
            'Peshawar'
        ],
        'Gilgit' => [
            'Ghizer',
            'Gilgit',
            'Hunza',
            'Nagar'
        ],
        'Baltistan' => [
            'Ghanche',
            'Skardu',
            'Kharmang',
            'Shigar'
        ],
        'Diamer' => [
            'Astore',
            'Diamer'
        ],
        'Mirpur' => [
            'Mirpur',
            'Bhimber',
            'Kotli'
        ],
        'Muzaffarabad' => [
            'Muzaffarabad',
            'Hattian Bala',
            'Neelum'
        ],
        'Poonch' => [
            'Poonch',
            'Bagh',
            'Haveli',
            'Sudhnati'
        ],
        'Banbhore' => [
            'Badin',
            'Sujawal',
            'Thatta'
        ],
        'Hyderabad' => [
            'Dadu',
            'Hyderabad',
            'Jamshoro',
            'Matiari',
            'Tando Allahyar',
            'Tando Muhammad Khan'
        ],
        'Karachi' => [
            'Karachi Central',
            'Karachi East',
            'Karachi South',
            'Karachi West',
            'Korangi',
            'Keamari',
            'Malir'
        ],
        'Sukkur' => [
            'Ghotki',
            'Khairpur',
            'Sukkur'
        ],
        'Larkana' => [
            'Jacobabad',
            'Kashmore',
            'Larkana',
            'Qambar Shahdadkot',
            'Shikarpur'
        ],
        'Mirpur Khas' => [
            'Mirpur Khas',
            'Sanghar',
            'Tharparkar',
            'Umerkot'
        ],
        'Shaheed Benazirabad' => [
            'Naushahro Feroze',
            'Shaheed Benazirabad'
        ]
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->districts as $division => $districts) {
            foreach ($districts as $district) {
                \App\Models\District::create([
                    'name' => $district,
                    'division_id' => $this->getDivisionId($division)
                ]);
            }
        }
    }

    private function getDivisionId(string $name) {
        return \App\Models\Division::where('name', '=', $name)->first()->getAttribute('id');
    }
}
