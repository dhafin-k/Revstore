<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    public $name;
    public $categories;
    public function mount()

    {
        $this->categories = Category::all();
    }

    public function saveCategory()
    {
        $this->validate(['name' => 'required|string|max:255']);
        Category::create(['name' => $this->name]);
        $this->name = '';
        $this->categories = Category::all();

        session()->flash('message', 'Category added successfully!');
    }

    public function render()
    {
        return view('livewire.category-component',[
            'categories' => $this->categories,
        ])->layout('components.layouts.admin');
    }
}
