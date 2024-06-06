<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\ComplianceLog;

class ComplianceLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logs = [
            ['user_id' => 1, 'activity_type' => 'Login', 'activity_description' => 'User logged in', 'performed_by' => 'System', 'performed_at' => Carbon::now()->subHours(1)],
            ['user_id' => 2, 'activity_type' => 'Logout', 'activity_description' => 'User logged out', 'performed_by' => 'System', 'performed_at' => Carbon::now()->subHours(2)],
            ['user_id' => 3, 'activity_type' => 'Password Change', 'activity_description' => 'User changed password', 'performed_by' => 'User', 'performed_at' => Carbon::now()->subHours(3)],
            ['user_id' => 4, 'activity_type' => 'Profile Update', 'activity_description' => 'User updated profile', 'performed_by' => 'User', 'performed_at' => Carbon::now()->subHours(4)],
            ['user_id' => 5, 'activity_type' => 'Data Export', 'activity_description' => 'User exported data', 'performed_by' => 'User', 'performed_at' => Carbon::now()->subHours(5)],
        ];

        foreach ($logs as $log) {
            ComplianceLog::create($log);
        }
    }
}
