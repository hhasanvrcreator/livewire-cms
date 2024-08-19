<?php

namespace App\Livewire;

use Livewire\Component;

class Tasks extends Component
{

    public $task = '';
    public $tasks = [];

    public function mount()
    {
        $this->tasks = ['reading', 'cooking', 'sleeping'];
    }

    public function add()
    {
        $this->tasks[] = $this->task;

        // $this->task = '';
        $this->reset('task');
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
