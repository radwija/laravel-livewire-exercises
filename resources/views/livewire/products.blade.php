<div>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <a href="/update-product/{{ $product->id }}">Edit</a>
                    <button wire:click="delete({{ $product->id }})">Delete</button>
                </td>
            </tr>
            @empty
            <div class="alert alert-danger">
                Data Post belum Tersedia.
            </div>
            @endforelse
        </tbody>
    </table>
</div>
