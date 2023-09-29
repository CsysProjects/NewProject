@extends('frontend.component.admin.main')

@section('tab-content')
<div class="dashboard-data tab-pane in active" id="dashboard">
    <div class="tab-pane" id="payment">
        <div class="content bg-light ">
          <div  
            class="items-push"
          >
              <div class="category-head p-4 w-100" style="margin-top: 5rem;">
                <h1 class="text-dark">Payment</h1>
              </div>
          </div>
        </div>
        <div class="content bg-light p-4 rounded">
          <div class="">
            <div class="block-content">
              <table
                class="table table-bordered table-striped text-center cat-dataTable-full"
              >
                <thead>
                  <tr>
                    <th>Gateway Name</th>
                    <th class="hidden-xs">Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-w600 cat_icon">Paypal</td>
                    <td class="font-w600">Done</td>
                    <td class="text-center">
                      <a
                        href="#"
                        class="btn btn-xs btn-success"
                        data-toggle="tooltip"
                        ><i class="fa fa-pencil"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-w600 cat_icon">Paypal</td>
                    <td class="font-w600">Done</td>
                    <td class="text-center">
                      <a
                        href="#"
                        class="btn btn-xs btn-success"
                        data-toggle="tooltip"
                        ><i class="fa fa-pencil"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-w600 cat_icon">Paypal</td>
                    <td class="font-w600">Done</td>
                    <td class="text-center">
                      <a
                        href="#"
                        class="btn btn-xs btn-success"
                        data-toggle="tooltip"
                        ><i class="fa fa-pencil"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-w600 cat_icon">Paypal</td>
                    <td class="font-w600">Done</td>
                    <td class="text-center">
                      <a
                        href="#"
                        class="btn btn-xs btn-success"
                        data-toggle="tooltip"
                        ><i class="fa fa-pencil"></i
                      ></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Dynamic Table Full -->
        </div>
      </div>

</div>
@endsection