<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddProduct extends Component
{
    #[Validate('required')]
    public $name = '';

    public function save()
    {
        $this->validate();

        Product::create($this->all());
    }

    public function render()
    {
        return view('livewire.add-product');
    }
}
