<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataMapping;

class DataMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mappings = [
            ['user_id' => 1, 'data_flow' => 'User Registration', 'cloud_services' => 'AWS, Google Cloud', 'third_party_services' => 'Stripe, SendGrid'],
            ['user_id' => 2, 'data_flow' => 'User Login', 'cloud_services' => 'Azure, IBM Cloud', 'third_party_services' => 'PayPal, MailChimp'],
            ['user_id' => 3, 'data_flow' => 'Order Processing', 'cloud_services' => 'Google Cloud, Oracle Cloud', 'third_party_services' => 'Stripe, Twilio'],
            ['user_id' => 4, 'data_flow' => 'User Profile Update', 'cloud_services' => 'AWS, Azure', 'third_party_services' => 'SendGrid, Twilio'],
            ['user_id' => 5, 'data_flow' => 'Payment Processing', 'cloud_services' => 'IBM Cloud, Oracle Cloud', 'third_party_services' => 'PayPal, Stripe'],
        ];

        foreach ($mappings as $mapping) {
            DataMapping::create($mapping);
        }
    }
}
