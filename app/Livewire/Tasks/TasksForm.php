<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class TasksForm extends Component
{

    public TaskForm $form;

    public function save()
    {
        $this->validate();
        $this->form->store();
        $this->dispatch('task-created');
        $this->form->reset();
        // $this->redirect('/tasks');
    }

    public function render()
    {
        return view('livewire.tasks.tasks-form');
    }
}
