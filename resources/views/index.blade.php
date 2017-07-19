<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    @yield('title')
     @include('includes.header')

     
     

     
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" 
        class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <!-- navbar-fixed-top-->
      @include('layout.header')
    <!-- //navbar-fixed-top-->

    <!-- main menu-->
    @include('layout.nav_bar')
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <!--body content-->
        @yield('content')
        <!--//body content-->
      </div>
    </div>

    <!---footer-->
    @include('layout.footer')
    <!---footer-->


    <!--include file script -- >
    @include('includes.footer')
    <!--///include file script -- >
  </body>
</html>
