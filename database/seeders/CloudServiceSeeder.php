<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CloudService;

class CloudServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'AWS', 'account_linked' => true, 'resource_monitoring_status' => 'active', 'compliance_check_status' => 'active'],
            ['name' => 'Google Cloud', 'account_linked' => false, 'resource_monitoring_status' => 'inactive', 'compliance_check_status' => 'inactive'],
            ['name' => 'Azure', 'account_linked' => true, 'resource_monitoring_status' => 'active', 'compliance_check_status' => 'active'],
            ['name' => 'IBM Cloud', 'account_linked' => false, 'resource_monitoring_status' => 'inactive', 'compliance_check_status' => 'inactive'],
            ['name' => 'Oracle Cloud', 'account_linked' => true, 'resource_monitoring_status' => 'active', 'compliance_check_status' => 'active'],
        ];

        foreach ($services as $service) {
            CloudService::create($service);
        }
    }
}
