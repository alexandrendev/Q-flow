<?php

namespace App\Livewire;

use Livewire\Component;

class WaitingTriageList extends Component
{
    public function render()
    {
        $records = MedicalRecord::where('status', AttendanceStatus::WaitingTriage)
            ->orderBy('created_at')
            ->get();
        return view('livewire.waiting-triage-list', compact('records'));
    }
}
