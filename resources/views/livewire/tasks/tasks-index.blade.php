<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Tasks') }}
    </h2>
</x-slot>




<div class="py-12 flex items-center justify-center">
    <div class="max-w-7xl mx-auto flex">
        {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900"> --}}

                {{-- listing here --}}
                <livewire:tasks.tasks-list lazy />

                {{-- form here --}}
                <livewire:tasks.tasks-form />
                
            {{-- </div>
        </div> --}}
    </div>
</div>
