<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TasksIndex extends Component
{
    public TaskForm $form;

    public function save()
    {
        $this->validate();
        $this->form->store();
        $this->form->reset();
        // $this->redirect('/tasks');
    }

    public function render()
    {
        return view('livewire.tasks.tasks-index', [
            "tasks" => auth()->user()->tasks
        ])->layout('layouts.app');
    }
}
