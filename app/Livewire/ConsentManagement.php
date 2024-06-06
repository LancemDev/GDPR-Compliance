<?php

namespace App\Livewire;

use Livewire\Component;
use Mary\Traits\Toast;
use App\Models\ConsentManagement as ConsentManagementModel;

class ConsentManagement extends Component
{
    use Toast;

    public bool $editConsentManagementModal = false;
    public $userConsent;
    public $consentDate;
    public $consentPurpose;
    public $consentManagementId;
    public $consentStatus;

    public function save()
    {
        $this->validate([
            'userConsent' => 'required',
            'consentDate' => 'required',
            'consentPurpose' => 'required',
        ]);

        $this->editConsentManagementModal = false;

        ConsentManagementModel::create([
            'user_id' => auth()->id(),
            'user_consent' => $this->userConsent,
            'consent_date' => $this->consentDate,
            'consent_purpose' => $this->consentPurpose,
            'consent_status' => 'pending',
        ]);

        $this->success('Consent Management created successfully!');
    }

    public function update()
    {
        $this->validate([
            'userConsent' => 'required',
            'consentDate' => 'required',
            'consentPurpose' => 'required',
        ]);

        $this->editConsentManagementModal = false;

        ConsentManagementModel::find($this->consentManagementId)->update([
            'user_consent' => $this->userConsent,
            'consent_date' => $this->consentDate,
            'consent_purpose' => $this->consentPurpose,
            'consent_status' => 'pending',
        ]);

        $this->success('Consent Management updated successfully!');
    }

    public function edit($id)
    {
        // dd($id)
        $consentManagement = ConsentManagementModel::find($id);

        $this->consentManagementId = $consentManagement->id;
        $this->userConsent = $consentManagement->user_consent;
        $this->consentDate = $consentManagement->consent_date;
        $this->consentPurpose = $consentManagement->consent_purpose;
        $this->consentStatus = $consentManagement->consent_status;

        $this->editConsentManagementModal = true;
    }
    public function render()
    {
        return view('livewire.consent-management');
    }

    public function close()
    {
        $this->editConsentManagementModal = false;
    }
}
