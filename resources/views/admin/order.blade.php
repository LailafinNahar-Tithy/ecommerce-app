<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .title_deg{
            text-align:center;
            font-size:25px;
            font-weight:bold;
            padding-bottom:40px;
        }
        .table_deg{
            border:2px solid white;
            margin:auto;
            width:100%;
            text-align:center;
            

        }
        .th_deg{
            background-color:skyblue;
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
            <h1 class="title_deg">All Order</h1>
      

        <div style="padding-left:400px; padding-bottom:35px">
      <form action="{{url('search')}}" method="get">
        @csrf

      <input type="text" style="color:black;" name="search" placeholder="Search for something">

      <input type="submit" name="" value="Search" class="btn btn-outline-primary">
      </form>
      
      </div>
            <table class="table_deg">
                <tr class="th_deg">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                    <th>Print Pdf</th>
                    <th>Send Email</th>
                    
                </tr>
            @forelse ($order as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img style="width:200px;height:150px;" src="product/{{$order->image}}" alt="">
                    </td>
                    
                    <td>
                    @if($order->delivery_status=='processing')
                    <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure you want to delivered?')" class="btn btn-primary">Delivered</a>
                    @else
                    <p style="color:green;">Delivered</p>
                    @endif
                  </td>
                  <td>
                    <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
                  </td>

                  <td>
                    <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send Email</a>
                  </td>
                   
                </tr>

                @empty
                <tr >
                  <td colspan="16">No data found</td>
                </tr>
                @endforelse
            </table>

          </div>
          </div>
       
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>