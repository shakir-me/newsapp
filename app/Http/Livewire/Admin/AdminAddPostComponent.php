<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Auth;
use Carbon\Carbon;
class AdminAddPostComponent extends Component
{
    use WithFileUploads;

    public $category_id;
    public $tag_id;
    public $title;
    public $slug;
    public $shor_desc;
    public $long_desc;
    public $status;
    public $slider_news;
    public $bracking_news;
    public $featured_news;
    public $popular_news;
    public $image;

    public function generateSlug()
  {
    $this->slug=Str::slug($this->title);
  }

  public function updated($field)
  {
      $this->validateOnly($field,[
          'title' => 'required|unique:posts|max:255',
          'slug'=>'required',
          'category_id'=>'required',
          'tag_id'=>'required',
          'shor_desc'=>'required',
          'long_desc'=>'required',
          'status'=>'required',
          'slider_news'=>'required',
          'bracking_news'=>'required',
          'featured_news'=>'required',
          'popular_news'=>'required',
          'image'=>'required'
      ]);

     
  }

  public function PostStore()
  {

      $this->validate([
         
          'title' => 'required|unique:posts|max:255',

          'category_id'=>'required',
          'tag_id'=>'required',
          'status'=>'required',
          'shor_desc'=>'required',
          'long_desc'=>'required',
          'slider_news'=>'required',
          'bracking_news'=>'required',
          'featured_news'=>'required',
          'popular_news'=>'required',
          'image'=>'required'
      ]);
      $post=new Post();
      $post->user_id=Auth::user()->id;
      $post->title=$this->title;
      $post->slug=$this->slug;
      $post->category_id=$this->category_id;
      $post->tag_id=$this->category_id;
      $post->status=$this->status;
      $post->shor_desc=$this->shor_desc;
      $post->long_desc=$this->long_desc;
      $post->slider_news=$this->slider_news;
      $post->bracking_news=$this->bracking_news;
      $post->featured_news=$this->featured_news;
      $post->popular_news=$this->popular_news;
      $imageName=Carbon::now()->timestamp.'.'.$this->image->extension();
      
      $this->image->storeAs('posts',$imageName);
      $post->image=$imageName;
      $post->save();
     session()->flash('message','Post Added');

  }
  

    public function render()
    {
        $categories=Category::all();
        $tags=Tag::where('status',1)->get();
        
        return view('livewire.admin.admin-add-post-component',['categories'=>$categories,'tags'=>$tags]);
    }
}
