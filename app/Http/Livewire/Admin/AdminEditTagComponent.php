<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Tag;
class AdminEditTagComponent extends Component
{

    public $name;
    public $status;
    public $slug;
    public $tag_id;

    public function generateSlug()
    {
      $this->slug=Str::slug($this->name);
    }

    public function mount($tag_id)
    {
    $tag=Tag::find($tag_id);
    $this->tag=$tag->id;
    $this->name=$tag->name;
    $this->slug=$tag->slug;
    $this->status=$tag->status;
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
            'name' => 'required|unique:tags|max:255',
          'slug'=>'required',
          'status'=>'required'
        ]);

       
    }

    
    public function UpdateTag(){

        $this->validate([
           
            'name' => 'required|unique:tags|max:255',
            'slug'=>'required',
            'status'=>'required'
        ]);

        
        $tag=Tag::find($this->tag_id);
        $tag->name=$this->name;
        $tag->slug=$this->slug;
        $tag->status=$this->status;
        $tag->save();
        session()->flash('message','Tag Updated');
    }

    


    public function render()
    {
        return view('livewire.admin.admin-edit-tag-component');
    }
}
