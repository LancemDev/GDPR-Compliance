<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PrivacyPolicy;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $policies = [
            ['user_id' => 1, 'company_name' => 'Company A', 'company_website_url' => 'https://companya.com', 'data_processing_activities' => 'User Registration, User Login', 'generated_privacy_policy' => 'Policy A', 'privacy_policy_status' => 'Active'],
            ['user_id' => 2, 'company_name' => 'Company B', 'company_website_url' => 'https://companyb.com', 'data_processing_activities' => 'Order Processing, Payment Processing', 'generated_privacy_policy' => 'Policy B', 'privacy_policy_status' => 'Inactive'],
            ['user_id' => 3, 'company_name' => 'Company C', 'company_website_url' => 'https://companyc.com', 'data_processing_activities' => 'User Profile Update, User Logout', 'generated_privacy_policy' => 'Policy C', 'privacy_policy_status' => 'Active'],
            ['user_id' => 4, 'company_name' => 'Company D', 'company_website_url' => 'https://companyd.com', 'data_processing_activities' => 'User Registration, Payment Processing', 'generated_privacy_policy' => 'Policy D', 'privacy_policy_status' => 'Inactive'],
            ['user_id' => 5, 'company_name' => 'Company E', 'company_website_url' => 'https://companye.com', 'data_processing_activities' => 'Order Processing, User Logout', 'generated_privacy_policy' => 'Policy E', 'privacy_policy_status' => 'Active'],
        ];

        foreach ($policies as $policy) {
            PrivacyPolicy::create($policy);
        }
    }
}
