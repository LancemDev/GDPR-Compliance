<div>
    {{-- Do your work, then step back. --}}
    @php
        $policies = \App\Models\ConsentManagement::all()->map(function ($policy) {
            $policy->user_consent = $policy->user_consent ? 'Yes' : 'No';
            return $policy;
        });

        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'user_consent', 'label' => 'User Consent'],
            ['key' => 'consent_date', 'label' => 'Consent Date'],
            ['key' => 'consent_purpose', 'label' => 'Consent Purpose'],
            ['key' => 'consent_status', 'label' => 'Consent Status'],
            ['key' => 'actions', 'label' => ''],
        ];
    @endphp

<!-- Rest of your code -->

    <x-mary-header title="Consents" subtitle="View and Manage Consents" with-anchor separator />
    {{-- <x-mary-button icon="o-plus" class="btn btn-primary" label="Generate New Private Policy" wire:click="add" /> --}}

    <x-mary-table :headers="$headers" :rows="$policies" striped @row-click="alert($event.detail.name)">
        @foreach($policies as $policy)
            @scope('actions', $policy)
            <div class="flex">
                <x-mary-button spinner class="btn-sm" wire:click="edit({{ $policy->id }})">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>                      
                </x-mary-button>
                
            </div>
            @endscope
        @endforeach
    </x-mary-table> 

    <x-mary-modal wire:model="editConsentManagementModal" title="Edit Consent" class="backdrop-blur" persistent>
        <x-mary-form wire:submit.prevent="update">
            <x-mary-input label="User Consent" wire:model="userConsent" />
            <x-mary-input label="Consent Date" wire:model="consentDate" />
            <x-mary-input label="Consent Purpose" wire:model="consentPurpose" />
            <x-mary-input label="Consent Status" wire:model="consentStatus" />
            <x-slot:actions>
                <x-mary-button label="Cancel" class="btn btn-secondary" wire:click="close" />
                <x-mary-button label="Update" class="btn btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-mary-form>
    </x-mary-modal>
</div>
