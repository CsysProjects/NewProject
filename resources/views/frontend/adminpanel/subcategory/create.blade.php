@extends('frontend.component.admin.main')

@section('tab-content')
    <div class="dashboard-data tab-pane in active" id="dashboard">
        <div class="tab-pane" id="category">
            <div class="content bg-light ">
                <div class="items-push">
                    <div class="category-head p-4 w-100" style="margin-top: 5rem;">
                        <h1 class="text-dark">Add Sub-Category</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container login-data">
                    <div class="card-body">
                        <div class="container-fluid">
                            <form id="contact_form" class="rental-form">
                                <div class="mb-3 form-group">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" name="category" id="category">
                                        <option value="mechanic"> Car Mechanic</option>
                                        <option value="mechanic">Bike Mechanic</option>
                                        <option value="mechanic">Truck Mechanic</option>
                                        <option value="mechanic">All in one</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="subcategory" class="form-label">Sub category name</label>
                                    <input type="text" class="form-control" id="subcategory" name="subcategory"
                                        placeholder="Enter category slug.." required>
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Sub category slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Enter category slug.." required>
                                </div>

                                <!-- Buttons within the form -->
                                <div class="text-end">
                                    <div class="col justify-content-end ">
                                        <a class="btn btn-secondary" href="{{ URL::to('admin/subcategory') }}">
                                            Back
                                        </a>
                                        <a class="btn btn-primary" href="{{ URL::to('admin/subcategory') }}">
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
