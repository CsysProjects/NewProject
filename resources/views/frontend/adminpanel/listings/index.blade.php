@extends('frontend.component.admin.main')

@section('tab-content')
    <div class="dashboard-data tab-pane in active" id="dashboard">
        <div class="tab-pane" id="listing">
            <div class="content bg-light ">
                <div class="items-push">
                    <div class="category-head p-4 w-100" style="margin-top: 5rem;">
                        <h1 class="text-dark">Listing</h1>
                    </div>
                </div>
            </div>
            <div class="content bg-light p-4 rounded">
                <!-- <div class="add-category text-end">
                <button class="btn btn-primary">
                  Add category
                </button>
              </div> -->
                <div class="category-container d-flex justify-content-between">
                    <div class="filter-search">
                        <div class="category-select">
                            <select class="dropdown p-1 rounded border">
                                <option>filtered listing</option>
                                <option>Pending</option>
                                <option>featured</option>
                            </select>
                        </div>
                        <div class="search-bar">
                            <input type="text" class="search-input p-1 rounded border" placeholder="Search...">
                            <button class="search-button btn btn-primary mx-3">Search</button>
                        </div>
                    </div>
                    <button class="btn btn-primary text-end">Add category</button>
                </div>
                <div class="mt-4">
                    <div class="block-content">
                        <table class="table table-bordered table-striped text-center cat-dataTable-full">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="hidden-xs">User</th>
                                    <th class="text-center">Category</th>
                                    <th>Sub category</th>
                                    <th>Title</th>
                                    <th>Featured</th>
                                    <th>Status</th>
                                    <th class="text-center" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-w600">19</td>
                                    <td class="font-w600">Sachin</td>
                                    <td class="font-w600">Car</td>
                                    <td class="font-w600">Sedan</td>
                                    <td class="font-w600">Engine service</td>
                                    <td class="font-w600"><i class="fa fa-check-circle bg-light border-success text-success"
                                            aria-hidden="true"></i></td>
                                    <td class="font-w600">Published</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-success" data-toggle="tooltip"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-w600">19</td>
                                    <td class="font-w600">Sachin</td>
                                    <td class="font-w600">Car</td>
                                    <td class="font-w600">Sedan</td>
                                    <td class="font-w600">Engine service</td>
                                    <td class="font-w600"><i class="fa fa-check-circle bg-light border-success text-success"
                                            aria-hidden="true"></i></td>
                                    <td class="font-w600">Published</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-success" data-toggle="tooltip"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-w600">19</td>
                                    <td class="font-w600">Sachin</td>
                                    <td class="font-w600">Car</td>
                                    <td class="font-w600">Sedan</td>
                                    <td class="font-w600">Engine service</td>
                                    <td class="font-w600"><i class="fa fa-check-circle bg-light border-success text-success"
                                            aria-hidden="true"></i></td>
                                    <td class="font-w600">Published</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-success" data-toggle="tooltip"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-w600">19</td>
                                    <td class="font-w600">Sachin</td>
                                    <td class="font-w600">Car</td>
                                    <td class="font-w600">Sedan</td>
                                    <td class="font-w600">Engine service</td>
                                    <td class="font-w600"><i class="fa fa-check-circle bg-light border-success text-success"
                                            aria-hidden="true"></i></td>
                                    <td class="font-w600">Published</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-success" data-toggle="tooltip"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table Full -->
            </div>
            <!-- END Page Content -->
        </div>
    </div>
@endsection
