@extends('layouts.app')




<style>
 
.column {
  background-color:moccasin;
  float: left;
  border: 1px 0px 0px 200px solid #ddd;
  border-radius: 300px  300px  300px 300px;
  padding: 10px 10px 10px 100px;
  width:40%;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<title>I-Run</title>


@section('content')

<div class="container" style="background-color:papayawhip">
   <h2>Please Choose Your Booking Type:</h2>

 <div class="row">
   <div class="column">
   <a href="booking/foods" >
   <img src="https://d22ir9aoo7cbf6.cloudfront.net/wp-content/uploads/sites/2/2018/10/Saltwater-Halal-Restaurants-Singapore.png" alt="Food Image" height="150" width="200">
   </a>
   <p style="text-align:center;padding:0px 100px 0px 0px"><a href="booking/foods" style="text-decoration:none;" > Booking for foods</a></p>
   </div>
   <div class="column">
   <a href="booking/items" >
   <img src="https://easyparcel.com/blog/my/assets/uploads/2014/08/easyparcel-e1408694895676-810x376.png" alt="Food Image" height="150" width="200">
   </a>
   <p style="text-align:center;padding:0px 100px 0px 0px"><a href="booking/items" style="text-decoration:none;" > Booking for items</a><p>
   </div>
 </div>
 </div>
 @endsection

   




