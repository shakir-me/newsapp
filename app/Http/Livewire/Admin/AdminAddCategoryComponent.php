<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
class AdminAddCategoryComponent extends Component
{

    public $name;
    public $home_category;
    public $slug;

    public function CategoryStore()
    {
        $category=new Category();
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->home_category=$this->home_category;
       $category->save();
  
    }


    public function render()
    {
        return view('livewire.admin.admin-add-category-component');
    }
}
