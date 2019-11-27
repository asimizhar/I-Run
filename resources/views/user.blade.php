@extends('layouts.app')


<style>
.column {
  background-color: white;
  float: left;
  border: 1px solid #ddd;
  border-radius: 100px  100px  100px 100px;
  padding: 10px 10px 10px 100px;
  width:40%;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}


</style>



@section('content')
<div class="container">
   <h2>Please Choose Your Order List:</h2>

 <div class="row">
   <div class="column">
   <a href="user/displayfood" >
   <img src="https://1cca81f991f801ed1f8a-67910a7dd0ce9c21dc476d2bc67bf6ca.ssl.cf2.rackcdn.com/img/homepage/icons/fbpickup.png" alt="Food Image" height="200" width="250">
   </a>
   <p style="text-align:center;padding:0px 100px 0px 0px"><a href="booking/foods" style="text-decoration:none;" > Order for foods</a></p>
   </div>
   <div class="column">
   <a href="user/displayitem" >
   <img src="https://media.licdn.com/dms/image/C560BAQEY7xLuwcpLNA/company-logo_200_200/0?e=2159024400&v=beta&t=AZsm6ime9zlzQpQdvdhx8bGaajG0_3gjFoPsfP5UGW0" alt="Food Image" height="200" width="250">
   </a>
   <p style="text-align:center;padding:0px 100px 0px 0px"><a href="booking/items" style="text-decoration:none;" > Order for items</a><p>
   </div>
 </div>
 </div>

 @endsection
