
    
    <!-- Navigation -->
    <nav class="navbar">
      <div class="container-fluid">
 <!-- Logo -->
        <div class="logo"> <h4>Techmoto</h4></a> </div>

        <ul class="nav ownmenu" role="tablist">
          <li role="presentation" class="{{ Request::is('/') ? 'active' : '' }}" > <a href="/" >Home</a> </li>
          <li role="presentation" class="{{ Request::is('about') ? 'active' : '' }}" > <a href="/about" >About</a> </li>
          <li role="presentation" class="{{ Request::is('services') ? 'active' : '' }}"> <a href="/services">Services</a> </li>
          <li role="presentation" class="{{ Request::is('contact') ? 'active' : '' }}"> <a href="/contact" >Contact us</a> </li>
        </ul>
        
        <!-- GET A QUOTES -->
        <div class="quotes"> 
        <a href="/login"> Log in  </a>
        <a href="/register"> Sign up  </a>
        </div>
      </div>
    </nav>
