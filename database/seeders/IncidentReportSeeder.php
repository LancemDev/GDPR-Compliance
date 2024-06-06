<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\IncidentReport;

class IncidentReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reports = [
            ['user_id' => 1, 'incident_description' => 'Data breach', 'affected_data' => 'User emails', 'incident_status' => 'Open', 'reported_at' => Carbon::now()->subDays(1)],
            ['user_id' => 2, 'incident_description' => 'Unauthorized access', 'affected_data' => 'User passwords', 'incident_status' => 'In Progress', 'reported_at' => Carbon::now()->subDays(2)],
            ['user_id' => 3, 'incident_description' => 'System outage', 'affected_data' => 'User profiles', 'incident_status' => 'Resolved', 'reported_at' => Carbon::now()->subDays(3)],
            ['user_id' => 4, 'incident_description' => 'Data loss', 'affected_data' => 'User orders', 'incident_status' => 'Open', 'reported_at' => Carbon::now()->subDays(4)],
            ['user_id' => 5, 'incident_description' => 'Service disruption', 'affected_data' => 'User payments', 'incident_status' => 'In Progress', 'reported_at' => Carbon::now()->subDays(5)],
        ];

        foreach ($reports as $report) {
            IncidentReport::create($report);
        }
    }
}
