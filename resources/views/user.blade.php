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
   <h2>Please Choose Your Order List:</h2>

 <div class="row">
   <div class="column">
   <a href="user/displayfood" >
   <img src="https://1cca81f991f801ed1f8a-67910a7dd0ce9c21dc476d2bc67bf6ca.ssl.cf2.rackcdn.com/img/homepage/icons/fbpickup.png" alt="Food Image" height="150" width="200">
   </a>
   <p style="text-align:center;padding:0px 100px 0px 0px"><a href="booking/foods" style="text-decoration:none;" > Order for foods</a></p>
   </div>
   <div class="column">
   <a href="user/displayitem" >
   <img src="images/Parcel-removebg-preview.png" alt="Food Image" height="150" width="200">
   </a>
   <p style="text-align:center;padding:0px 100px 0px 0px"><a href="booking/items" style="text-decoration:none;" > Order for items</a><p>
   </div>
 </div>
 </div>

 @endsection
