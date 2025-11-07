<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            "কম্পিউটার টেকনোলজি",
            "ইলেকট্রিক্যাল টেকনোলজি",
            "ইলেকট্রনিক্স টেকনোলজি",
            "সিভিল টেকনোলজি",
            "মেকানিক্যাল টেকনোলজি",
            "পাওয়ার টেকনোলজি",
            "রেফ্রিজারেশন অ্যান্ড এয়ার কন্ডিশনিং টেকনোলজি",
            "অটোমোবাইল টেকনোলজি",
            "টেলিকমিউনিকেশন টেকনোলজি",
            "আর্কিটেকচার অ্যান্ড ইন্টেরিয়র ডিজাইন টেকনোলজি",
            "ইনস্ট্রুমেন্টেশন অ্যান্ড প্রসেস কন্ট্রোল টেকনোলজি",
            "মেরিন টেকনোলজি",
            "কম্পিউটার সায়েন্স টেকনোলজি",
            "টেক্সটাইল টেকনোলজি",
            "ফুড টেকনোলজি",
            "এনভায়রনমেন্টাল টেকনোলজি",
            "গ্রাফিক ডিজাইন টেকনোলজি",
            "গার্মেন্টস ডিজাইন অ্যান্ড প্যাটার্ন মেকিং টেকনোলজি",
            "কেমিক্যাল টেকনোলজি",
            "মাইনিং অ্যান্ড মাইনসার্ভেয়িং টেকনোলজি"
        ];
        foreach ($departments as $department) {
            Department::create(['name' => $department, 'is_active' => true]);
        }
    }
}
