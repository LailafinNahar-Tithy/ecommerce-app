<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        label{
            display:inline-block;
            width:200px;
            font-size:15px;
            font-weight:bold;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <!-- <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div> -->
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

      <div class="main-panel">
          <div class="content-wrapper">

          <h1 style="text-align:center ; font-size:25px;"> Send email to {{$order->email}}</h1>


            <form action="{{url('send_user_email',$order->id)}}" method="POST">

            @csrf
          <div style="padding-left:35% ; padding-top:35px">
            <label for=""> Email Greetings </label>
            <input style="color:black;" type="text" name="greeting" id="">
           
          </div>

          <div style="padding-left:35% ; padding-top:35px">
            <label for="">Email FirstLine</label>
            <input style="color:black;"  type="text" name="firstline" id="">
           </div>
          
           <div style="padding-left:35% ; padding-top:35px">
            <label for="">Email body</label>
            <input style="color:black;"  type="text" name="body" id="">
           </div>
           <div style="padding-left:35% ; padding-top:35px">
            <label for="">Email Button</label>
            <input style="color:black;"  type="text" name="button" id="">
           </div>
          
           <div style="padding-left:35% ; padding-top:35px">
            <label for="">Email Url</label>
            <input style="color:black;"  type="text" name="url" id="">
           </div>
           <div style="padding-left:35% ; padding-top:35px">
            <label for="">Email Lastline</label>
            <input style="color:black;"  type="text" name="lastline" id="">
           </div>

           <div style="padding-left:35% ; padding-top:35px">
            
            <input type="submit" value="send email" class="btn btn-info">
           </div>
        
        </form>

          </div>
      </div>
        
        <!-- partial -->
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>