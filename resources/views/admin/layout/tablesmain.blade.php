
<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.includes.head')
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('admin.includes.sideBar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column"> 
            <!-- Main Content -->
             <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    @include('admin.includes.SBToggle')
                    <!-- Topbar Search -->
                     
                    @include('admin.includes.search')
                    <!-- Topbar Navbar -->
                    @include('admin.includes.topBar')
                </nav>
                <!-- End of Topbar -->

                @yield('content')

             </div>
            <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.includes.footer')
        <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('admin.includes.Scroll-to-Top-Button')
    <!-- Logout Modal-->
    @include('admin.includes.logoutModal')
    <!-- java script footer-->
    @include('admin.includes.JSfooter')
</body>

</html>