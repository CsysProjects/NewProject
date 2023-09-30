@extends('frontend.component.admin.main')

@section('tab-content')
<div class="dashboard-data tab-pane in active" id="dashboard">
<div class="tab-pane" id="category">
  <div class="content bg-light ">
    <div
      class="items-push"
    >
        <div class="category-head p-4 w-100" style="margin-top: 5rem;">
          <h1 class="text-dark">Category</h1>
        </div>
    </div>
  </div>
  <div class="content bg-light p-4 rounded">
    <div class="add-category text-end">
      <a class="btn btn-primary" href="{{ URL::to('admin/add-category') }}">
        Add category
    </a>
    </div>
    <div class="">
      <div class="search-element">
        <div class="row d-flex justify-content-between align-items-center my-4">
          <div class="col-sm-6">
            <div class="data-length">
              <label for="cars"></label>
              <select name="cars" id="cars" class="p-1 rounded border">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 text-end">
            <div class="search-field">
              <label class="text-black">Search</label>
              <input type="text" class="p-1 rounded border" placeholder="Search" />
            </div>
          </div>
        </div>
      </div>
      <div class="block-content">
        <table
          class="table table-bordered table-striped cat-dataTable-full"
        >
          <thead>
            <tr>
              <th>Category name</th>
              <th class="hidden-xs">category slug</th>
              <th class="text-center" style="width: 10%">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="font-w600 cat_icon">
                <i class="bx-menu bx fa-lg"></i>
                &nbsp; Volvo
              </td>
              <td class="font-w600">Motor</td>
              <td class="text-center">
                <a
                  href="#"
                  class="btn btn-xs btn-success"
                  data-toggle="tooltip"
                  ><i class="fa fa-pencil"></i
                ></a>
                <a
                  href="#"
                  class="btn btn-xs btn-danger"
                  data-toggle="tooltip"
                  ><i class="fa fa-times"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td class="font-w600 cat_icon">
                <i class="bx-menu bx fa-lg"></i>
                &nbsp; Volvo
              </td>
              <td class="font-w600">Motor</td>
              <td class="text-center">
                <a
                  href="#"
                  class="btn btn-xs btn-success"
                  data-toggle="tooltip"
                  ><i class="fa fa-pencil"></i
                ></a>
                <a
                  href="#"
                  class="btn btn-xs btn-danger"
                  data-toggle="tooltip"
                  ><i class="fa fa-times"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td class="font-w600 cat_icon">
                <i class="bx-menu bx fa-lg"></i>
                &nbsp; Volvo
              </td>
              <td class="font-w600">Motor</td>
              <td class="text-center">
                <a
                  href="#"
                  class="btn btn-xs btn-success"
                  data-toggle="tooltip"
                  ><i class="fa fa-pencil"></i
                ></a>
                <a
                  href="#"
                  class="btn btn-xs btn-danger"
                  data-toggle="tooltip"
                  ><i class="fa fa-times"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td class="font-w600 cat_icon">
                <i class="bx-menu bx fa-lg"></i>
                &nbsp; Volvo
              </td>
              <td class="font-w600">Motor</td>
              <td class="text-center">
                <a
                  href="#"
                  class="btn btn-xs btn-success"
                  data-toggle="tooltip"
                  ><i class="fa fa-pencil"></i
                ></a>
                <a
                  href="#"
                  class="btn btn-xs btn-danger"
                  data-toggle="tooltip"
                  ><i class="fa fa-times"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td class="font-w600 cat_icon">
                <i class="bx-menu bx fa-lg"></i>
                &nbsp; Volvo
              </td>
              <td class="font-w600">Motor</td>
              <td class="text-center">
                <a
                  href="#"
                  class="btn btn-xs btn-success"
                  data-toggle="tooltip"
                  ><i class="fa fa-pencil"></i
                ></a>
                <a
                  href="#"
                  class="btn btn-xs btn-danger"
                  data-toggle="tooltip"
                  ><i class="fa fa-times"></i
                ></a>
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