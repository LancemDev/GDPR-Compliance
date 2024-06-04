<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <x-mary-header title="Privacy Policy" subtitle="Privacy Policy Generator" separator />

    <x-mary-button icon="o-plus" class="btn btn-primary" label="Add New" wire:click="add" />


    <x-mary-modal wire:model="showPrivacyPolicyModal" title="Add New Privacy Policy" class="backdrop-blur" persistent>
        <x-mary-form wire:submit.prevent="save">
            <x-mary-input label="Company Name" wire:model="companyName" />
            <x-mary-input label="Website URL" wire:model="websiteUrl" />
            <x-mary-tags label="Data Processing Activities" wire:model="dataProcessingActivities" hint="Hit enter to create a new activity" />
            <x-slot:actions>
                <x-mary-button label="Cancel" class="btn btn-secondary" wire:click="close" />
                <x-mary-button label="Save" class="btn btn-primary" type="submit" spinner />
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
                <x-mary-button label="Approve" class="btn btn-primary" type="submit" spinner />
            </x-slot:actions>
        </x-mary-form>
    </x-mary-modal>

    Privacy Policies here, as a list from the db. below this ofcourse

</div>
