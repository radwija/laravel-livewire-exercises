<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class UpdateProduct extends Component
{
    public $product;
    public $name;
    public $id;

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
        $this->name = $this->product->name;
        $this->id = $id;
    }

    public function update()
    {
        $this->product->name = $this->name;
        $this->product->save();
    }
    public function render()
    {
        return view('livewire.update-product');
    }
}
