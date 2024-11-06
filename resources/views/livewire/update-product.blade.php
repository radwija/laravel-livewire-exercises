<div>
    <form wire:submit="update">
        <input type="text" wire:model="name">
        <div>
            @error('name') <span class="error">{{ $message }}</span> @enderror 
        </div>

        <button type="submit">Update</button>
    </form>
</div>
