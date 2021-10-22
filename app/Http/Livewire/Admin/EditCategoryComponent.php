<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class EditCategoryComponent extends Component
{
    public $catName;
    public $slug;
    public $category_id;
    public $category_slug;

    public function mount($categorySlug)
    {
        $this->category_slug = $categorySlug;
        $category = Category::where('slug' , $categorySlug)->first();
        $this->category_id = $category->id;
        $this->slug = $category->slug;
        $this->catName = $category->name;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->catName);
    }

    public function updateCategory()
    {
        $category = Category::find($this->category_id);
        $category->name = $this->catName;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message' ,'Your Category Updated Successfully!');
    }
    public function render()
    {
        return view('livewire.admin.edit-category-component')->layout('layouts.base');
    }
}
