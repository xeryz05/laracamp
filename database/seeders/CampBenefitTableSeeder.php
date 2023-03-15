<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;
class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Tect Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac display',
            ],
            [
                'camp_id' => 1,
                'name' => 'Mentoring'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium design'
            ],
            [
                'camp_id' => 2,
                'name' => 'Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course'
            ],
        ];
        CampBenefit::insert($campBenefits);
    }
}
