<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h3>Admin Add Post</h3>

                  <a href="{{ route('admin.posts') }}" class="btn btn-primary">All Post</a>

                 @if (Session::has('message'))

                 <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                     
                 @endif
                    <form wire:submit.prevent="PostStore" >

                        <div class="form-group">
                            <label for="exampleInputPassword1">Category Name</label>
                            <select class="form-control" name="category_id" wire:model="category_id">
                             <option value="0">Select Category</option>
                             @foreach ($categories as $category )
                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                             @endforeach
                           
                            </select>

                            @error('category_id')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Tag Name</label>
                            <select class="form-control" name="tag_id" wire:model="tag_id">
                             <option value="0">Select Tagd</option>
                             @foreach ($tags as $tag )
                             <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                             @endforeach
                            </select>

                            @error('tag_id')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>
                       
                        <div class="form-group">
                          <label for="exampleInputEmail1">Post Title</label>
                          <input type="text" class="form-control"  name="title" placeholder="Post Title" wire:model="title" wire:keyup="generateSlug" >
                         @error('title')
                           <p class="text-danger">{{ $message }}</p>
                         @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Post Slug</label>
                          <input type="text" class="form-control" name="slug"  placeholder="Post Slug" wire:model="slug">
                          @error('slug')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Short  Description</label>
                            <textarea class="form-control" placeholder="Short  Description" name="shor_desc" wire:model="shor_desc"></textarea>
                           @error('shor_desc')
                             <p class="text-danger">{{ $message }}</p>
                           @enderror
                          </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Long  Description</label>
                            <textarea class="form-control" placeholder="Long  Description" name="long_desc" wire:model="long_desc"></textarea>
                           @error('long_desc')
                             <p class="text-danger">{{ $message }}</p>
                           @enderror
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Slider New</label>
                            <select class="form-control" name="slider_news" wire:model="slider_news">
                             <option value="0">Select Please</option>
                             <option value="1">Yes</option>
                             <option value="0">No</option>
                            </select>

                            @error('slider_news')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Bracking News</label>
                            <select class="form-control" name="bracking_news" wire:model="bracking_news">
                             <option value="0">Select Please</option>
                             <option value="1">Yes</option>
                             <option value="0">No</option>
                            </select>

                            @error('bracking_news')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Featured News </label>
                            <select class="form-control" name="featured_news" wire:model="featured_news">
                             <option value="0">Select Please</option>
                             <option value="1">Yes</option>
                             <option value="0">No</option>
                            </select>

                            @error('featured_news')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Popular News  </label>
                            <select class="form-control" name="popular_news" wire:model="popular_news">
                             <option value="0">Select Please</option>
                             <option value="1">Yes</option>
                             <option value="0">No</option>
                            </select>

                            @error('popular_news')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>

                        

                        <div class="form-group">
                            <label for="exampleInputPassword1">Post Status</label>
                            <select class="form-control" name="status" wire:model="status">
                             <option value="0">Select Please</option>
                             <option value="1">Yes</option>
                             <option value="0">No</option>
                            </select>

                            @error('status')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>

                        

                           <div class="form-group">
                            <label for="exampleInputPassword1">Post Image</label>
                            <input type="file" name="image" wire:model="image" class="form-control">
                         @if ($image)
                         <img src="{{ $image->temporaryUrl() }}" alt="">
                             
                         @endif
                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                             @enderror
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>

     

               
            </div>
        </div>
    </div>
</div>
