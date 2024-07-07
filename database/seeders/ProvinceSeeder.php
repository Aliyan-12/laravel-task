<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    protected array $provinces = [
        [
            'name' => 'Islamabad',
            'is_capital' => true
        ],
        [
            'name' => 'Punjab'
        ],
        [
            'name' => 'Khyber Pukhtunkhwa'
        ],
        [
            'name' => 'Sindh'
        ],
        [
            'name' => 'Azad Jammu Kashmir'
        ],
        [
            'name' => 'Balochistan'
        ],
        [
            'name' => 'Gilgit Baltistan'
        ]
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        foreach($this->provinces as $province) {
            \App\Models\Province::create($province);
        }
    }
}
