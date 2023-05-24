 @php

 $prefix = Request::route()->getprefix();
 $route = Route::current()->getName();
 @endphp

 <!-- Page Wrapper -->
 <div id="wrapper">

     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard-content') }}">
             <div class="sidebar-brand-icon rotate-n-15">
                 <i class="fas fa-laugh-wink"></i>
             </div>
             <div class="sidebar-brand-text mx-3">TravelBills</div>
         </a>

         <!-- Nav Item - Visit Website -->
         <li class="nav-item">
             <a class="nav-link" target="__blank" href="{{ url('/') }}">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span style="font-size:19px">Visit Website</span></a>
         </li>
         <!-- Nav Item - Visit Website -->
         <li class="nav-item {{ ($route == 'home-booking')? 'active':'' }}">
             <a class="nav-link" href="{{ route('home-booking') }}">
                 <i class="fas fa-fw fa-table"></i>
                 <span style="font-size:19px">Hostel Booking</span>
             </a>
         </li>
         <!-- Nav Item - Visit Website -->
         <li class="nav-item {{ ($route == 'air-ticket')? 'active':'' }} ">
             <a class="nav-link" href="{{route('air-ticket')}}">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span style="font-size:19px">Air Ticket</span>
             </a>
         </li>
         <!-- Nav Item - Visit Website -->
         <li class="nav-item {{ ($route == 'indian-railway-ticket')? 'active':'' }}">
             <a class="nav-link" href="{{ route('indian-railway-ticket') }}">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span style="font-size:19px">Indian Rail Ticket</span>
             </a>
         </li>
         <!-- Nav Item - Visit Website -->
         <li class="nav-item {{ ($route == 'contacts')? 'active':'' }}">
             <a class="nav-link" href="{{ route('contacts')}}">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span style="font-size:19px">All Contact</span></a>
         </li>

         <!-- Divider -->
         <!-- <hr class="sidebar-divider d-none d-md-block"> -->

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
     </ul>
     <!-- End of Sidebar -->

     <!-- Content Wrapper -->
     <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content">
             <!-- Topbar -->
             <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                 <!-- Sidebar Toggle (Topbar) -->
                 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                     <i class="fa fa-bars"></i>
                 </button>

                 <!-- Topbar Search -->
                 <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                     <div class="input-group">
                         <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <button class="btn btn-primary" type="button">
                                 <i class="fas fa-search fa-sm"></i>
                             </button>
                         </div>
                     </div>
                 </form>

                 <!-- Topbar Navbar -->
                 <ul class="navbar-nav ml-auto">

                     <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                     <li class="nav-item dropdown no-arrow d-sm-none">
                         <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-search fa-fw"></i>
                         </a>
                         <!-- Dropdown - Messages -->
                         <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                             <form class="form-inline mr-auto w-100 navbar-search">
                                 <div class="input-group">
                                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                     <div class="input-group-append">
                                         <button class="btn btn-primary" type="button">
                                             <i class="fas fa-search fa-sm"></i>
                                         </button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </li>



                     <div class="topbar-divider d-none d-sm-block"></div>

                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                             </span>
                             <img class="  img-profile rounded-circle" src="https://ui-avatars.com/api/?name=Travel+BIlls">
                         </a>
                         <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Logout
                             </a>
                         </div>
                     </li>

                 </ul>

             </nav>
             <!-- End of Topbar -->

             <!-- Begin Page Content -->
             <div class="container-fluid">

                 <!-- 
                {{-- change main content here --}}
                {{-- change main content here --}} -->

                 @yield('main_content')


             </div>
             <!-- /.container-fluid -->
         </div>
         <!-- End of Main Content -->
         <!-- Footer -->
         <footer class="sticky-footer bg-white">
             <div class="container my-auto">
                 <div class="copyright text-center my-auto">
                     <h4>Copyright TravelBills &copy; Your Website 2023</h4>
                 </div>
             </div>
         </footer>
         <!-- End of Footer -->
     </div>
     <!-- End of Content Wrapper -->
 </div>
 <!-- End of Page Wrapper -->