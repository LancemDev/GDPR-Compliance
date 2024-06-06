<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    {{-- <x-mary-header title="Privacy Policy" subtitle="Privacy Policy Generator" separator /> --}}

    <x-mary-modal wire:model="showPrivacyPolicyModal" title="Add New Privacy Policy" class="backdrop-blur" persistent>
        <x-mary-form wire:submit.prevent="save">
            <x-mary-input label="Company Name" wire:model="companyName" />
            <x-mary-input label="Website URL" wire:model="websiteUrl" />
            <x-mary-tags label="Data Processing Activities" wire:model="dataProcessingActivities" hint="Hit enter to create a new activity" />
            <x-slot:actions>
                <x-mary-button label="Cancel" class="btn btn-secondary" wire:click="close" />
                <x-mary-button label="Generate your privacy policy" class="btn btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-mary-form>
    </x-mary-modal>

    <x-mary-modal wire:model="showReadPrivacyPolicyModal" title="Read and Approve Privacy Policy" class="backdrop-blur" persistent>
        <x-mary-form wire:submit.prevent="approve">
            <x-mary-input label="Company Name" wire:model="companyName" disabled />
            <x-mary-input label="Website URL" wire:model="websiteUrl" disabled />
            <x-mary-tags label="Data Processing Activities" wire:model="dataProcessingActivities" disabled />
            <x-mary-textarea label="Privacy Policy" wire:model="privacyPolicy" disabled />
            <x-slot:actions>
                <x-mary-button label="Cancel" class="btn btn-secondary" wire:click="close" />
                <x-mary-button label="Approve" class="btn btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-mary-form>
    </x-mary-modal>

    @php
        $policies = \App\Models\PrivacyPolicy::all();

        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'company_name', 'label' => 'Company Name'],
            ['key' => 'company_website_url', 'label' => 'Company Website URL'],
            ['key' => 'actions', 'label' => ''],
        ];
    @endphp

        <x-mary-header title="Generated Policies" subtitle="Use Advanced Algorithms to generate your privacy policy" with-anchor separator />
        <x-mary-button icon="o-plus" class="btn btn-primary" label="Generate New Private Policy" wire:click="add" />

        <x-mary-table :headers="$headers" :rows="$policies" striped @row-click="alert($event.detail.name)">
            @foreach($policies as $policy)
                @scope('actions', $policy)
                <div class="flex">
                    <x-mary-button spinner class="btn-sm" wire:click="downloadPrivacyPolicy({{ $policy->id }})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                    </x-mary-button>
                </div>
                @endscope
            @endforeach
        </x-mary-table>        

</div>
