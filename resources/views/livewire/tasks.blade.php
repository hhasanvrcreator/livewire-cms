<div>
    <h1>Tasks : </h1>

    <input type="text" wire:model="task" placeholder="Task..."> 
    <button wire:click="add" class="bg-indigo-500 p-2">Add Task</button>

    <ul>
        @foreach ($tasks as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>
