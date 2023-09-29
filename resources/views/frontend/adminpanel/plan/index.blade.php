@extends('frontend.component.admin.main')

@section('tab-content')
<div class="dashboard-data tab-pane in active" id="dashboard">
    <div class="tab-pane" id="plan">
        <div class="content bg-light ">
          <div
            class="items-push"
          >
              <div class="category-head p-4 w-100" style="margin-top: 5rem;">
                <h1 class="text-dark">Plan</h1>
              </div>
          </div>
        </div>
        <div class="content bg-light p-4 rounded">
          <div class="add-category text-end">
            <button class="btn btn-primary">
              Add plan
            </button>
          </div>
          <div class="mt-4">
            <div class="block-content">
              <table
                class="table text-center table-bordered table-striped cat-dataTable-full"
              >
                <thead>
                  <tr>
                    <th>Plan name</th>
                    <th class="hidden-xs">Price</th>
                    <th>Duration</th>
                    <th>Listing limits</th>
                    <th>Recommended</th>
                    <th class="text-center" style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-w600">Free Plan</td>
                    <td class="font-w600">0.00</td>
                    <td class="font-w600">1 month</td>
                    <td class="font-w600">1</td>
                    <td class="font-w600">no</td>
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
                    <td class="font-w600">Standard  Plan</td>
                    <td class="font-w600">29.00</td>
                    <td class="font-w600">6 months</td>
                    <td class="font-w600">5</td>
                    <td class="font-w600">no</td>
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
                    <td class="font-w600">Premium  Plan</td>
                    <td class="font-w600">49.00</td>
                    <td class="font-w600">1 year</td>
                    <td class="font-w600">15</td>
                    <td class="font-w600">yes</td>
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