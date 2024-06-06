<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RiskAssessment as RiskAssessmentModel;
use Mary\Traits\Toast;

class RiskAssessment extends Component
{
    use Toast;

    public bool $editRiskAssessmentModal = false;
    public $step = 1;
    public $user_id;
    public $dpi_step;
    public $risk_level;
    public $mitigation_recommendations;

    public function prev()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function next()
    {
        if ($this->step < 4) {
            $this->step++;
        }
    }
    public function render()
    {
        return view('livewire.risk-assessment');
    }
}
