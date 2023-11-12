<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .center{
            margin:auto;
            width:50%;
            border:2px solid white;
            text-align:center;
            margin-top:40px;
        }
        .font_type{
            text-align :center;
            font-size:40px;
            padding-top:20px;
        }
        .img_type{
           width:150px;
           height:150px; 
        }
        .th_color{
            background:skyblue;
        }
        .dg{
           padding:30px; 
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
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close"  data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>
            @endif

          <table class="center">
            <h2 class="font_type">All product</h2>
            <tr class="th_color">
                <th class="dg">Product title</th>
                <th class="dg">Description</th>
                <th class="dg">Quantity</th>
                <th class="dg">Catagory</th>
                <th class="dg">Price</th>
                <th class="dg">Discount Price</th>
                <th class="dg">Product image</th>
                 <th class="dg">Delete</th>
                 <th class="dg">Edit</th>

            </tr>
            @foreach($product as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->catagory}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount_price}}</td>
                <td>
                    <img src="/product/{{$product->image}}" alt="" class="img_type">
                </td>
                <td>
                  <a href="{{url('delete_product',$product->id)}}" class="btn btn-danger" onclick="return confirm('Are sure,you want to delete?')">Delete</a>
                </td>
                <td>
                    <a href="{{url('edit_product',$product->id)}}" class="btn btn-success">Edit</a></td>
            </tr>
            @endforeach
          </table>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>