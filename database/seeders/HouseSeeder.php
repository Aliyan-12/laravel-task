<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    private static $counter = 1;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // dd(\App\Models\Tehsil::count());
        for($i = 1; $i < \App\Models\Tehsil::count(); $i++) {
            call_user_func([$this, 'generateRow'], rand(1, 10));
            call_user_func([$this, 'reset'], []);
        }
    }

    private function generateRow(int $childs)
    {
        while($childs > 0) {
            \App\Models\House::create([
                'number' => $this->generate(),
                'uc_id' => $this->getRandomUC()
            ]);
            $childs--;
        }
    }

    private function generate() {
        return sprintf('H-%s', self::$counter++);
    }
    private function getRandomUC() {
        return \App\Models\UnionCouncil::inRandomOrder()->first()->getAttribute('id');
    }
    private function reset() {
        self::$counter = 1;
    }
}
