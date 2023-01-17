<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Tag;
class AdminAddTagComponent extends Component
{

    public $name;
    public $slug;
    public $status;

    public function generateSlug()
  {
    $this->slug=Str::slug($this->name);
  }

  public function updated($field)
  {
      $this->validateOnly($field,[
          'name' => 'required|unique:tags|max:255',
       'slug'=>'required',
       'status'=>'required'
      ]);

     
  }

  public function TagStore()
  {

      $this->validate([
         
          'name' => 'required|unique:tags|max:255',
          'slug'=>'required',
          'status'=>'required'
      ]);
      $tag=new Tag();
      $tag->name=$this->name;
      $tag->slug=$this->slug;
      $tag->status=$this->status;
      $tag->save();
     session()->flash('message','Tag Added');

  }



    public function render()
    {
        return view('livewire.admin.admin-add-tag-component');
    }
}
