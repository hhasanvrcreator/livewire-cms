<?php

namespace App\Livewire\Forms;

use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    public ?Task $task;
    public $editMode = false;

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

    public function setTask(Task $task)
    {
        $this->task = $task;
        $this->editMode = true;
        $this->title = $task->title;
        $this->slug = $task->slug;
        $this->description = $task->description;
        $this->status = $task->status;
        $this->deadline = $task->deadline->format('Y-m-d');
        $this->priority = $task->priority;
    }

    public function store()
    {
        // auth()->user()->tasks()->create($this->only(['title', 'slug', 'description', 'status', 'priority', 'deadline']));
        if ($this->editMode) {
            $this->task->update($this->all());
            $this->reset();
            session()->flash('success', 'Task updated successfully');
        } else {
            auth()->user()->tasks()->create($this->all());
            $this->reset();
            session()->flash('success', 'Task created successfully');
        }
    }
}
