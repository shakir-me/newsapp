<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
class AdminPostsComponent extends Component
{

    

    public function deletePost($id)
    {
        $post=Post::find($id);
        $post->delete();
        session()->flash('message','Post Deleted');
    }
    public function render()
    {
        $posts=Post::all();
        return view('livewire.admin.admin-posts-component',['posts'=>$posts]);
    }
}
