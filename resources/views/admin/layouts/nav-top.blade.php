<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      
    
      </li>
    </ul>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <i class="fas fa-sign-out-alt"></i>
      <input type="submit" value="Logout" role="button">
      
    </form>
  </nav>