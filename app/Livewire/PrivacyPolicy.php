<?php

namespace App\Livewire;

use Livewire\Component;
use Mary\Traits\Toast;

class PrivacyPolicy extends Component
{
    use Toast;

    public bool $showPrivacyPolicyModal = false;
    public bool $showReadPrivacyPolicyModal = false;
    public $companyName;
    public $websiteUrl;
    public $privacyPolicy;
    public $dataProcessingActivities = [];

    public function save()
    {
        $this->validate([
            'companyName' => 'required',
            'websiteUrl' => 'required|url',
            'dataProcessingActivities' => 'required',
        ]);

        $this->showPrivacyPolicyModal = false;

        $this->success('Privacy Policy saved successfully!');
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
