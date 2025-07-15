<?php

namespace App\Livewire;

use Livewire\Component;

class QueueItem extends Component
{

    public $name;
    public $status;
    public $priority;

    public function render()
    {
        return view('livewire.queue-item');
    }
}
