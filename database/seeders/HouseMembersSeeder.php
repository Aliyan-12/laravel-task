<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseMembersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // dd(\App\Models\Tehsil::count());
        for($i = 1; $i < \App\Models\House::count(); $i++) {
            call_user_func([$this, 'generateRow'], rand(1, 4));
        }
    }

    private function generateRow(int $childs)
    {
        $genders = ['male', 'female'];
        while($childs > 0) {
            \App\Models\HouseMembers::create([
                'name' =>  fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'cnic' => \Illuminate\Support\Str::numbers('12345819202149'),
                'age' => rand(rand(1, 5), rand(rand(5, 30), rand(30, 70))),
                'gender' => shuffle($genders),
                'house_id' => $this->getRandomHouse()
            ]);
            $childs--;
        }
    }

    private function getRandomHouse()
    {
        return \App\Models\House::inRandomOrder()->first()->getAttribute('id');
    }
}
