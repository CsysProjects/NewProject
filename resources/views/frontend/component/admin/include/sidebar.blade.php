
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div class="">
        <a href="#" class="nav_logo">
          <i class="bx bx-layer nav_logo-icon"></i>
          <span class="nav_logo-name">TechMoto</span>
        </a>
        <div class="nav_list nav-pills" role="tablist">
          <a href="{{ URL::to('admin/dashboard') }}" class="nav_link {{ Request::is('admin/dashboard') ? 'active' : '' }}" aria-selected="true" role="presentation">
            <i class="fa fa-th-large" aria-hidden="true"></i>
            <span class="nav_name">Dashboard</span>
          </a>
          <a href="{{ URL::to('admin/category') }}" class="nav_link {{ Request::is('admin/category') ? 'active' : '' }} " aria-selected="true" tabindex="-1" role="">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span class="nav_name">Category</span>
          </a>
          <a class="nav_link {{ Request::is('admin/subcategory') ? 'active' : '' }} " href="{{ URL::to('admin/subcategory') }}" aria-selected="false" tabindex="-1" role="tab">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="nav_name">Sub category</span>
          </a>
          <a class="nav_link {{ Request::is('admin/post') ? 'active' : '' }}" href="{{ URL::to('admin/post') }}"aria-selected="false" tabindex="-1" role="tab">
            <i class="bx bx-bookmark nav_icon"></i>
            <span class="nav_name">Post</span>
          </a>
          <a class="nav_link {{ Request::is('admin/location') ? 'active' : '' }}" href= "{{ URL::to('admin/location') }}" aria-selected="false" tabindex="-1" role="tab">
            <i class="fa fa-location-arrow" aria-hidden="true"></i>
            <span class="nav_name">Location</span>
          </a>
          <a class="nav_link {{ Request::is('admin/listings') ? 'active' : '' }}" href="{{ URL::to('admin/listings') }}" aria-selected="false" tabindex="-1" role="tab">
            <i class="fa fa-thumb-tack" aria-hidden="true"></i>
            <span class="nav_name">Listings</span>
          </a>
          <a class="nav_link {{ Request::is('admin/plan') ? 'active' : '' }}" href="{{ URL::to('admin/plan') }}" aria-selected="false" tabindex="-1" role="tab">
            <i class="fa fa-money" aria-hidden="true"></i>
            <span class="nav_name">Plan</span>
          </a>
          <a class="nav_link {{ Request::is('admin/payment') ? 'active' : '' }}" href="{{ URL::to('admin/payment') }}" aria-selected="false" tabindex="-1" role="tab">
            <i class="fa fa-paypal" aria-hidden="true"></i>
            <span class="nav_name">Payment gateway</span>
          </a>
          <a class="nav_link {{ Request::is('admin/transactions') ? 'active' : '' }}" href="{{ URL::to('admin/transactions') }}" aria-selected="false" tabindex="-1" role="tab">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="nav_name">Transactions</span>
          </a>
          <a class="nav_link {{ Request::is('admin/user') ? 'active' : '' }}" href="{{ URL::to('admin/user') }}" aria-selected="false" tabindex="-1" role="tab">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span class="nav_name">User</span>
          </a>
          <a class="nav_link {{ Request::is('admin/system') ? 'active' : '' }}" href="{{ URL::to('admin/system') }}" aria-selected="false" tabindex="-1" role="tab">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <span class="nav_name">System</span>
          </a>
        </div>
      </div>
    </nav>
  </div>