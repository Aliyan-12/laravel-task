<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    protected array $divisions = [
        'Balochistan' => [
            'Kalat',
            'Makran',
            'Naseerabad',
            'Quetta',
            'Sibi',
            'Zhob',
            'Loralai',
            'Rakhshan',
        ],
        'Punjab' => [
            'Bahawalpur',
            'Dera Ghazi Khan',
            'Faisalabad',
            'Gujranwala',
            'Gujrat',
            'Lahore',
            'Mianwali',
            'Multan',
            'Rawalpindi',
            'Sahiwal',
            'Sargodha',
        ],
        'Khyber Pukhtunkhwa' => [
            'Bannu',
            'Dera Ismail Khan',
            'Hazara',
            'Kohat',
            'Malakand',
            'Mardan',
            'Peshawar',
        ],
        'Gilgit Baltistan' => [
            'Gilgit',
            'Baltistan',
            'Diamer',
        ],
        'Azad Jammu Kashmir' => [
            'Mirpur',
            'Muzaffarabad',
            'Poonch',
        ],
        'Sindh' => [
            'Banbhore',
            'Hyderabad',
            'Karachi',
            'Sukkur',
            'Larkana',
            'Mirpur Khas',
            'Shaheed Benazirabad',
        ]
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->divisions as $province => $divisions) {
            foreach ($divisions as $division) {
                \App\Models\Division::create([
                    'name' => $division,
                    'province_id' => $this->getProvinceId($province)
                ]);
            }
        }
    }

    private function getProvinceId(string $name) {
        return \App\Models\Province::where('name', '=', $name)->first()->getAttribute('id');
    }
}
