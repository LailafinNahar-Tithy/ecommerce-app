<!DOCTYPE html>
<html lang="en">
  <head>

  <style>
    .div_center{
      text-align:center;
      padding-top:40px;

    }
    .font_size{
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color{
        color:black;
        padding-bottom:20px;
    }
    label{
        display:inline-block;
        width:200px;
    }
    .div_design{
        padding-bottom:15px;
    }
  </style>
    <!-- Required meta tags -->
   
    @include('admin.css')
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

            <div class="div_center">
            <h1 class="font_size">Update Products</h1>

            <form action="{{url('/edit_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="div_design">
            <label for=""> Product Title</label>
            <input class="text_color" type="text" name="title" placeholder="write a title" required="" value="{{$product->title}}">
            </div>

            <div class="div_design">
            <label for=""> Description</label>
            <input class="text_color" type="text" name="description" placeholder="write a description" required="" value="{{$product->description}}">
            </div>

            <div class="div_design">
            <label for=""> Product Price</label>
            <input class="text_color" type="number" name="price" placeholder="write a price" required="" value="{{$product->price}}">
            </div>

            <div class="div_design">
            <label for=""> Discount Price</label>
            <input class="text_color" type="number" name="dis_price" placeholder="write a discount price" value="{{$product->discount_price}}">
            </div>

            <div class="div_design">
            <label for=""> Product Quantity</label>
            <input class="text_color" min="0"type="number" name="quantity" placeholder="write quantity" required="" value="{{$product->quantity}}">
            </div>

            <div class="div_design">
            <label for=""> Product Catagory</label>
            <select class="text_color" name="catagory" id="" required="" >

                <option selected="" value="{{$product->catagory}}">{{$product->catagory}}</option>
                @foreach($catagory as $catagory)
                      <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                @endforeach
               
            </select>
            </div>

            <div class="div_design">
            <label for="">Current Image</label>
            <img src="/product/{{$product->image}}" height="100px" width="100px" alt="" style="margin:auto;">
            </div>

            <div class="div_design">
            <label for="">change Image</label>
            <input type="file" name="image" >
            </div>

            <div class="div_design">
           
            <input type="submit" value="update Product" class="btn btn-primary">
            </div>
            </form>
        </div>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>