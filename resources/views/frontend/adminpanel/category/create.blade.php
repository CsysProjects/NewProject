@extends('frontend.component.admin.main')

@section('tab-content')
<div class="dashboard-data tab-pane in active" id="dashboard">
<div class="tab-pane" id="category">
  <div class="content bg-light ">
    <div
      class="items-push">
        <div class="category-head p-4 w-100" style="margin-top: 5rem;">
          <h1 class="text-dark">Add Category</h1>
        </div>
    </div>
  </div>
<div class="container">
    <div class="container login-data">

       
            <div class="card-body">
                <div class="container-fluid">
                    <form id="contact_form" class="rental-form">
                        <div class="mb-3">
                                <label for="Category" class="form-label">Category name</label>
                                <input type="text" class="form-control" id="category" name="category"
                                    placeholder="Enter category name.." required>
                            </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Category slug</label>
                            <input type="text" class="form-control" id="slug" name="slug"
                                placeholder="Enter category slug.." required>
                        </div>
                        <!-- Buttons within the form -->
                        <div class="text-end">
                            <div class="col justify-content-end ">
                                <a class="btn btn-secondary" href="{{ URL::to('admin/category') }}">
                                    Back
                                </a>
                                <a class="btn btn-primary" href="{{ URL::to('admin/category') }}">
                                    Add sub-category
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
</div>
  
  <!-- END Page Content -->
</div>
</div>
@endsection