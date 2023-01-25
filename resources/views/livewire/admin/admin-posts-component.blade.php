<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h3>Admin Posts</h3>

                 <a href="{{ route('admin.post.add') }}" class="btn btn-primary">Add Posts</a>
                 @if (Session::has('message'))

                 <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                     
                 @endif
                <div class="card">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Image</th>
                          <th scope="col">Title</th>
                          <th scope="col">Slug</th>
                          <th scope="col">User Name</th>
                          <th scope="col">Category</th>
                          <th scope="col">Tag</th>
                          <th scope="col">Date</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        <tr>
                          <th scope="row">{{$post->id}}</th>
                          <th scope="row">
                            <img src="{{ asset('asset/admin/images/posts') }}/{{$post->image  }} " alt="Post Image" height="50px;" width="50px;">
                          </th>
                          <td>{{$post->title}}</td>
                          <td>{{$post->slug}}</td>
                          <td>{{$post->user->name}}</td>
                          <td>{{$post->category->name}}</td>
                          <td>{{$post->tag->name}}</td>
                          <td>{{$post->created_at}}</td>
                          <td>{{$post->status==1 ? 'Yes' :'NO' }}
                             
                           
                           
                             
                          </td>
                          <td>
                              {{-- <a href="{{ route('admin.category.edit', ['category_id'=>$category->id]) }} " class="btn btn-info">Edit</a> --}}
                             <a href="#" onclick="confirm('Are you sure delete Post ?') || event.stopImmediatePropagation()" wire:click.prevent="deletePost({{$post->id  }})" class="btn btn-danger" >Delete</a>
                          </td>
                        </tr>
                      @endforeach
                   
                      </tbody>
                    </table>
                </div>

            </div>

               
            </div>
        </div>
    </div>
</div>
