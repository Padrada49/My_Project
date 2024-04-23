<?php

namespace App\Livewire;

use Livewire\Component;

class Products extends Component
{
    public $products, $name, $price, $description, $product_id;
    public $isOpen = 0;

    public function render()
    {
        $this->products = Products::all();
        return view('livewire.products');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->name = '';
        $this->price = '';
        $this->description = '';
        $this->product_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        Products::updateOrCreate(['id' => $this->product_id], [
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description
        ]);

        session()->flash('message',
            $this->product_id ? 'Product Updated Successfully.' : 'Product Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        $this->product_id = $id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->description = $product->description;

        $this->openModal();
    }

    public function delete($id)
    {
        Products::find($id)->delete();
        session()->flash('message', 'Product Deleted Successfully.');
    }
}
