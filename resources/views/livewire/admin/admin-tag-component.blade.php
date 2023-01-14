<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h3>Admin Tags</h3>

                 <a href="#" class="btn btn-primary">Add Tag</a>
                 @if (Session::has('message'))

                 <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                     
                 @endif
                <div class="card">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Slug</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tags as $tag)
                        <tr>
                          <th scope="row">{{$tag->id}}</th>
                          <td>{{$tag->name}}</td>
                          <td>{{$tag->slug}}</td>
                          <td>{{$tag->status==1 ? 'Yes' :'NO' }}
                             
                           
                           
                             
                          </td>
                          <td>
                              <a href=" " class="btn btn-info">Edit</a>
                              <a href="#"  class="btn btn-danger" >Delete</a>
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
