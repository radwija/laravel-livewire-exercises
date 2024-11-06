<div>
    <form wire:submit="save">
        <input type="text" wire:model="name">
        <div>
            @error('name') <span class="error">{{ $message }}</span> @enderror 
        </div>

        <button type="submit">Save</button>
    </form>
</div>
