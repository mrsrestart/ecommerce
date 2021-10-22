<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $catName;
    public $slug;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->catName);
    }

    public function storeCategory()
    {
        $category = new Category();
        $category->name = $this->catName;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message' , 'Category has been Created Successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
