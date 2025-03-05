<div>

    <flux:heading>Todos</flux:heading>

    <form wire:submit='add'>
        <div class="flex flex-col space-y-3">
            <flux:input wire:model="todo" description="Enter your todo here." />

            <flux:button type='submit'>Add</flux:button>
        </div>
    </form>

    <div class="mt-3 flex flex-col space-y-3">
        @foreach ($todos as $todo)
            <div>
                <flux:label>{{ $todo }}</flux:label>
            </div>
        @endforeach
    </div>

</div>
