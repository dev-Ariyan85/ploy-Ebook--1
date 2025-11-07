<?php

namespace Database\Seeders;

use App\Models\Semister;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Semister::create(['name' => 'First Semister', 'is_active' => true]);
        Semister::create(['name' => 'Second Semister', 'is_active' => true]);
        Semister::create(['name'=> 'Third Semister', 'is_active' => true]);
        Semister::create(['name'=> 'Fourth Semister', 'is_active' => true]);
        Semister::create(['name'=> 'Fifth Semister', 'is_active' => true]);
        Semister::create(['name'=> 'Sixth Semister', 'is_active' => true]);
        Semister::create(['name'=> 'Seventh Semister', 'is_active' => true]);
        Semister::create(['name'=> 'Eighth Semister', 'is_active' => true]);
    }
}
