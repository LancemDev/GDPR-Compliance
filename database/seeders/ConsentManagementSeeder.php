<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\ConsentManagement;

class ConsentManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $consents = [
            ['user_id' => 1, 'user_consent' => true, 'consent_date' => Carbon::now()->subDays(10), 'consent_purpose' => 'Marketing', 'consent_status' => 'Active'],
            ['user_id' => 2, 'user_consent' => false, 'consent_date' => Carbon::now()->subDays(20), 'consent_purpose' => 'Data Collection', 'consent_status' => 'Inactive'],
            ['user_id' => 3, 'user_consent' => true, 'consent_date' => Carbon::now()->subDays(30), 'consent_purpose' => 'Research', 'consent_status' => 'Active'],
            ['user_id' => 4, 'user_consent' => false, 'consent_date' => Carbon::now()->subDays(40), 'consent_purpose' => 'Marketing', 'consent_status' => 'Inactive'],
            ['user_id' => 5, 'user_consent' => true, 'consent_date' => Carbon::now()->subDays(50), 'consent_purpose' => 'Data Collection', 'consent_status' => 'Active'],
        ];

        foreach ($consents as $consent) {
            ConsentManagement::create($consent);
        }
    }
}
