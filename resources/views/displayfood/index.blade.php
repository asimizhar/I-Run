@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-12">
 <br/>
 <h3 allign="center">Food Order</h3>
 <br/>
 <table class="table table-bordered">
   <tr>
       <th>Customer Name</th>
       <th>Food Name</th>
       <th>Price</th>
       <th>Restaurant/Cafe</th>
       <th>Delivery Date and Time</th>
       <th>Place To Deliver</th>
    </tr>

    @foreach ($displayfood as $food)
    <tr>
      <td>{{$food->name}}</td>
      <td>{{$food->foodname}}</td>
      <td>{{$food->price}}</td>
      <td>{{$food->placeorder}}</td>
      <td>{{$food->deliverydatetime}}</td>
      <td>{{$food->placedeliver}}</td>
      
    </tr>
    @endforeach
</table>
@endsection


