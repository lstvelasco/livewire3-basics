<div>
    <flux:heading size="xl">New post</flux:heading>

    <form wire:submit='save'>
        <div class="flex flex-col space-y-3">
            <flux:field>
                <flux:label>Title</flux:label>

                <flux:input wire:model="title" type="text"  />
                <flux:error name="title" />
            </flux:field>

            <flux:field>
                <flux:label>Content</flux:label>

                <flux:textarea wire:model="content" x-bind:maxLength='35' />
                <flux:label>Characters: <span x-text='$wire.content.length'></span>/35</flux:label>

                <flux:error name="content" />
            </flux:field>

            <flux:button type="submit">Save</flux:button>
        </div>
    </form>
</div>
