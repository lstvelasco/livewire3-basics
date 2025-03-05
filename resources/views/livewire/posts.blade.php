<div>
    <div class="mt-3 flex flex-col space-y-3">
        @foreach ($posts as $post)
            <div class="flex flex-col space-y-3" wire:key='{{ $post->id }}'>
                <flux:label>{{ $post->title }}</flux:label>
                <br>
                <flux:label>{{ $post->content }}</flux:label>
                <br>
                <flux:button wire:confirm='Are you sure?' wire:click='destroy({{ $post->id }})'>Delete</flux:button>
            </div>
            <hr>
        @endforeach
    </div>
</div>
