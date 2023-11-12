<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pdf file</title>
</head>
<body>
    <h1>Order details</h1>
    
    
   Customer Name: <h3>{{$order->name}}</h3>
   Customer email:<h3>{{$order->emai}}</h3>
   Customer phone: <h3>{{$order->phone}}</h3>
   Customer address:<h3>{{$order->address}}</h3>
   Customer id:<h3>{{$order->user_id}}</h3>
   Product Name:<h3>{{$order->Product_title}}</h3>
   Product price:<h3>{{$order->price}}</h3>
   Product quantity:<h3>{{$order->quantity}}</h3>
   Payment status: <h3>{{$order->payment_status}}</h3>
   product id: <h3>{{$order->product_id}}</h3>
<br><br>
<img height="250"  width="250" src="product/{{$order->image}}"     alt="">
</body>
</html>