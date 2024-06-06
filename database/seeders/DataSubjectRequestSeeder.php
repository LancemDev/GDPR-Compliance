<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataSubjectRequest;

class DataSubjectRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requests = [
            ['user_id' => 1, 'request_type' => 'Access', 'request_status' => 'Pending', 'request_details' => 'User requested access to personal data'],
            ['user_id' => 2, 'request_type' => 'Deletion', 'request_status' => 'Completed', 'request_details' => 'User requested deletion of personal data'],
            ['user_id' => 3, 'request_type' => 'Rectification', 'request_status' => 'Pending', 'request_details' => 'User requested rectification of personal data'],
            ['user_id' => 4, 'request_type' => 'Access', 'request_status' => 'Completed', 'request_details' => 'User requested access to personal data'],
            ['user_id' => 5, 'request_type' => 'Deletion', 'request_status' => 'Pending', 'request_details' => 'User requested deletion of personal data'],
        ];

        foreach ($requests as $request) {
            DataSubjectRequest::create($request);
        }
    }
}
