<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Tag;
class AdminTagComponent extends Component
{

    public function deleteTag($id)
    {
        $tag=Tag::find($id);
        $tag->delete();
        session()->flash('message','Tag Deleted');
    }
    public function render()
    {
        $tags=Tag::all();
        return view('livewire.admin.admin-tag-component',['tags'=>$tags]);
    }
}
