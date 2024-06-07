<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DataBreach;
use App\Models\IncidentReport;

class Dashboard extends Component
{
    public $dataBreaches;
    public $consentRates;

    public function mount()
    {
        // $this->dataBreaches = DataBreach::latest()->take(10)->get();;
        $this->consentRates = IncidentReport::all();;
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
