<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h3>Admin Categories</h3>

                 <a href="{{ route('admin.category.add') }}" class="btn btn-primary">Add Category</a>

                <div class="card">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Slug</th>
                          <th scope="col">Home Category</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          <th scope="row">{{$category->id}}</th>
                          <td>{{$category->name}}</td>
                          <td>{{$category->slug}}</td>
                          <td>{{$category->home_category==1 ? 'Yes' :'NO' }}
                             
                           
                           
                             
                          </td>
                          <td>
                              <a href="" class="btn btn-info">Edit</a>
                              <a href="" class="btn btn-danger">Delete</a>
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
