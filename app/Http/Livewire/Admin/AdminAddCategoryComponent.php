<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

use App\Models\Category;
class AdminAddCategoryComponent extends Component
{

    public $name;
    public $home_category;
    public $slug;
  public function generateSlug()
  {
    $this->slug=Str::slug($this->name);
  }

    public function updated($field)
    {
        $this->validateOnly($field,[
            'name' => 'required|unique:categories|max:255',
         'slug'=>'required',
         'home_category'=>'required'
        ]);

       
    }

    public function CategoryStore()
    {

        $this->validate([
           
            'name' => 'required|unique:categories|max:255',
            'slug'=>'required',
            'home_category'=>'required'
        ]);
        $category=new Category();
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->home_category=$this->home_category;
       $category->save();
       session()->flash('message','Category Added');
  
    }


    public function render()
    {
        return view('livewire.admin.admin-add-category-component');
    }
}
