<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <x-mary-header title="Risk Assessment" subtitle="Risk Assessment" separator />
    <x-mary-steps wire:model="step" class="border my-5 p-5">
        <x-mary-step step="1" text="Register">
            Start a DPIA
        </x-mary-step>
        <x-mary-step step="2" text="Payment">
            Payment step
        </x-mary-step>
        <x-mary-step step="3" text="Receive Product" class="bg-orange-500/20">
            Receive Product
        </x-mary-step>
    </x-mary-steps>

    <x-mary-button label="Previous" wire:click="prev" />
    <x-mary-button label="Next" wire:click="next" />
</div>
