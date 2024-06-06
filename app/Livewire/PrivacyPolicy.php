<?php

namespace App\Livewire;

use Livewire\Component;
use Mary\Traits\Toast;
use App\Models\PrivacyPolicy as PrivacyPolicyModel;
use GuzzleHttp\Client;
use Mpdf\Mpdf;

class PrivacyPolicy extends Component
{
    use Toast;

    public bool $showPrivacyPolicyModal = false;
    public bool $showReadPrivacyPolicyModal = false;
    public $companyName;
    public $websiteUrl;
    public $privacyPolicy;
    public array $dataProcessingActivities = [];

    public function save()
    {
        $this->validate([
            'companyName' => 'required',
            'websiteUrl' => 'required|url',
            'dataProcessingActivities' => 'required',
        ]);

        $this->showPrivacyPolicyModal = false;

        // generate a privacy policy using ai by calling my route lance-flow.vercel.app/policy
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post('https://lance-flow.vercel.app/policy', [
            'json' => [
                'companyName' => $this->companyName,
                'websiteUrl' => $this->websiteUrl,
                'dataProcessingActivities' => $this->dataProcessingActivities,
            ]
        ]);

        $response = json_decode($result->getBody()->getContents());

        // dd($response);
        PrivacyPolicyModel::create([
            'user_id' => auth()->id(),
            'company_name' => $this->companyName,
            'company_website_url' => $this->websiteUrl,
            'data_processing_activities' => json_encode($this->dataProcessingActivities),
            'generated_privacy_policy' => $response->response, // assuming the policy is returned in a 'policy' property
            'privacy_policy_status' => 'pending',
        ]);

        $this->success('Privacy Policy created successfully!');
    }

    public function downloadPrivacyPolicy($id)
    {
        $privacyPolicy = PrivacyPolicyModel::find($id);

        // Convert plain text to HTML
        $privacyPolicyHtml = '<p>' . str_replace("\n", '<br>', $privacyPolicy->generated_privacy_policy) . '</p>';

        // Create a new mPDF instance
        $mpdf = new Mpdf();

        // Write some HTML code
        $mpdf->WriteHTML($privacyPolicyHtml);

        // Output a PDF file directly to the browser
        $mpdf->Output('privacy_policy.pdf', \Mpdf\Output\Destination::DOWNLOAD);
    }

    public function add()
    {
        $this->showPrivacyPolicyModal = true;
    }

    public function close()
    {
        $this->showPrivacyPolicyModal = false;
        $this->showReadPrivacyPolicyModal = false;
    }

    public function approve()
    {
        $this->success('Privacy Policy approved successfully!');
        $this->showReadPrivacyPolicyModal = false;
    }

    public function render()
    {
        return view('livewire.privacy-policy');
    }
}