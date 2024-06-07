<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <x-mary-header title="Dashboard" subtitle="GDPR Compliance Dashboard" separator />

    <div class="flex">
        <x-mary-stat title="Consent Rates" value="44" icon="o-envelope" tooltip="The latest on consent rates" />
    
        <x-mary-stat title="Data Retention period" description="This month" value="22.124" icon="o-arrow-trending-up" tooltip-bottom="Latest on data retention tips" />
        
        <x-mary-stat title="Data Breach Incidents" description="This month" value="34" icon="o-arrow-trending-down" tooltip-left="Incidents of data breach" />
        
        <x-mary-stat title="Compliance Issues" description="This month" value="22.124" icon="o-arrow-trending-down" class="text-orange-500" color="text-pink-500" tooltip-right="Latest on compliance issues" />
    </div>

    @php
        $dataBreaches = collect([
            ['id' => 1, 'company_name' => 'Company 1', 'incident_date' => '2022-01-01', 'affected_people' => 1000],
            ['id' => 2, 'company_name' => 'Company 2', 'incident_date' => '2022-02-01', 'affected_people' => 2000],
            // Add more dummy data as needed
        ]);

        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'company_name', 'label' => 'Company Name'],
            ['key' => 'incident_date', 'label' => 'Incident Date'],
            ['key' => 'affected_people', 'label' => 'Affected People'],
            ['key' => 'actions', 'label' => ''],
        ];
    @endphp

    <x-mary-header title="Recent Data Breaches" separator />

    <x-mary-table :headers="$headers" :rows="$dataBreaches" striped @row-click="alert($event.detail.name)">
        @foreach($dataBreaches as $breach)
            @scope('actions', $breach)
            <div class="flex">
                <x-mary-button spinner class="btn-sm" wire:click="viewDataBreachDetails({{ $breach['id'] }})">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </x-mary-button>
            </div>
            @endscope
        @endforeach
    </x-mary-table>

</div>