<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item">
            <a class="nav-link" data-widget="Logout" data-slide="true" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
            class="fa fa-th-large"></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
      @role('admin')
      <li class="nav-item d-none d-sm-inline-block">
         <a href=" {{route('notifikasi')}}" class="nav-link">notifikasi custom<span class="badge badge-warning navbar-badge"></span>
       <!--  -->
      </li>
      @endrole
       
    </ul> 

    <!-- Right navbar links -->
   
  </nav>