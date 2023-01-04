<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h3>Admin Add Category</h3>

                  <a href="{{ route('admin.categories') }}" class="btn btn-primary">All Category</a>

           
                    <form wire:submit.prevent="CategoryStore" >
                       
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category Name</label>
                          <input type="text" class="form-control"  name="name" placeholder="Category Name" wire:model="name" >
                         
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Category Slug</label>
                          <input type="text" class="form-control" name="slug"  placeholder="Category Slug" wire:model="slug">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"> Home Category</label>
                            <select class="form-control" name="home_category" wire:model="home_category">
                             <option value="0">Select Please</option>
                             <option value="1">Yes</option>
                             <option value="0">No</option>
                            </select>
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>

     

               
            </div>
        </div>
    </div>
</div>
