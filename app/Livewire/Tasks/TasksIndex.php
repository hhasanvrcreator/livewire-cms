<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Validate;
use Livewire\Component;

class TasksIndex extends Component
{
    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $slug;

    #[Validate('required')]
    public $description;

    public $status;
    public $priority;

    #[Validate('required')]
    public $deadline;

    public function save()
    {
        $this->validate();
        auth()->user()->tasks()->create($this->only(['title', 'slug', 'description', 'status', 'priority', 'deadline']));
        $this->reset();
        session()->flash('success', 'Task created successfully');
        $this->redirect('/tasks');
    }

    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
