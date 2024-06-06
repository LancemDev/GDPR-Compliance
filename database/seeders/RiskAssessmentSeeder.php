<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RiskAssessment;

class RiskAssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assessments = [
            ['user_id' => 1, 'dpi_step' => 'Identify the need for DPIA', 'risk_level' => 'Low', 'mitigation_recommendations' => 'Regular system audits'],
            ['user_id' => 2, 'dpi_step' => 'Describe the processing', 'risk_level' => 'Medium', 'mitigation_recommendations' => 'Implement data encryption'],
            ['user_id' => 3, 'dpi_step' => 'Assess necessity and proportionality', 'risk_level' => 'High', 'mitigation_recommendations' => 'Limit data collection'],
            ['user_id' => 4, 'dpi_step' => 'Identify and assess risks', 'risk_level' => 'Low', 'mitigation_recommendations' => 'Regular system audits'],
            ['user_id' => 5, 'dpi_step' => 'Identify measures to mitigate risk', 'risk_level' => 'Medium', 'mitigation_recommendations' => 'Implement data encryption'],
        ];

        foreach ($assessments as $assessment) {
            RiskAssessment::create($assessment);
        }
    }
}
