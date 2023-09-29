@extends('frontend.component.admin.main')

@section('tab-content')
<div class="dashboard-data tab-pane in active" id="dashboard">
    <div class="bg-light px-3 py-3">
      <div
        class="content bg-image overflow-hidden"
        style="background-image: url('{{ asset('asset/images/contact.png') }}')">
        <div class="push-50-t push-15">
          <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
          <h2 class="h5 text-white-op animated zoomIn">User Name</h2>
        </div>
      </div>
      <!-- END Page Header -->

      <!-- Stats -->
      <div class="content content-narrow">
        <div class="row my-3">
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="#"
            >
              <div
                class="block-content box block-content-full bg-primary rounded"
              >
                <i class="fa fa-bars fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                <strong>4</strong> categories
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="{{ URL::to('admin/subcategories') }}"
            >
              <div
                class="block-content box block-content-full bg-dark rounded"
              >
                <i class="fa fa-list-ul fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                <strong>9</strong> sub categories
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="{{ URL::to('admin/locations') }}"
            >
              <div
                class="block-content box block-content-full bg-success rounded"
              >
                <i class="fa fa-location-arrow fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                <strong>4</strong> locations
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="{{ URL::to('admin/listings') }}"
            >
              <div
                class="block-content box block-content-full box bg-secondary rounded"
              >
                <i class="fa fa-map-marker fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                <strong>3</strong> listings
              </div>
            </a>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="{{ URL::to('admin/users') }}"
            >
              <div
                class="block-content box block-content-full rounded bg-warning"
              >
                <i class="fa fa-users fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                <strong>2</strong> users
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="{{ URL::to('admin/plan') }}"
            >
              <div
                class="block-content box block-content-full rounded bg-warning"
              >
                <i class="fa fa-money fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                <strong>6</strong> plan
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="{{ URL::to('admin/transaction') }}"
            >
              <div
                class="block-content box block-content-full rounded bg-info"
              >
                <i class="fa fa-list fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                <strong>7</strong> transactions
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="{{ URL::to('admin/') }}"
            >
              <div
                class="block-content box block-content-full bg-info rounded"
              >
                <i class="fa fa-list fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                <strong>5</strong> transactions
              </div>
            </a>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-sm-6 col-lg-3">
            <a
              class="block block-link-hover1 text-center"
              href="{{ URL::to('admin/settings') }}"
            >
              <div
                class="block-content box block-content-full bg-dark rounded"
              >
                <i class="fa fa-cog fa-5x text-white"></i>
              </div>
              <div
                class="block-content block-content-full block-content-mini bg-light p-2 rounded"
              >
                settings
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- END Stats -->
    </div>
    <!--Container Main end-->
  </div>
@endsection