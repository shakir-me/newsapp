<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
class AdminEditCategoryComponent extends Component
{

    public $name;
    public $home_category;
    public $slug;
    public $category_id;
    public function generateSlug()
    {
      $this->slug=Str::slug($this->name);
    }



    public function mount($category_id)
    {
    $category=Category::find($category_id);
    $this->category=$category->id;
    $this->name=$category->name;
    $this->slug=$category->slug;
    $this->home_category=$category->home_category;
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
            'name' => 'required|unique:categories|max:255',
         'slug'=>'required',
         'home_category'=>'required'
        ]);

       
    }

    public function UpdateCategory(){

        $this->validate([
           
            'name' => 'required|unique:categories|max:255',
            'slug'=>'required',
            'home_category'=>'required'
        ]);

        
        $category=Category::find($this->category_id);
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->home_category=$this->home_category;
        $category->save();
        session()->flash('message','Category Updated');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component');
    }
}
