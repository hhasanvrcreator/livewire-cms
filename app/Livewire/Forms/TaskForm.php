<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    #[Validate('required|min:5')]
    public $title;

    #[Validate('required')]
    public $slug;

    #[Validate('required')]
    public $description;

    public $status;
    public $priority;

    #[Validate('required')]
    public $deadline;

    public function store()
    {
        // auth()->user()->tasks()->create($this->only(['title', 'slug', 'description', 'status', 'priority', 'deadline']));
        auth()->user()->tasks()->create($this->all());
        session()->flash('success', 'Task created successfully');
    }
}
