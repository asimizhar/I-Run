@extends('layouts.app')

@section('content')
<div class="container" style="background-color:papayawhip">
<div class="row">
 <div class="col-md-12">
 <br/>
 <h3 allign="center">Food Order</h3>
 <br/>
 <table class="table table-bordered sortable">
   <tr>
       <th>Food ID</th>
       <th>Customer Name</th>
       <th>Food Name</th>
       <th>Price</th>
       <th>Restaurant/Cafe</th>
       <th>Delivery Date and Time</th>
       <th>Place To Deliver</th>
       <th>Status</th>
    </tr>

    @foreach ($displayfood as $food)
    <tr>
      <td>{{$food->id}}</td>
      <td>{{$food->name}}</td>
      <td>{{$food->foodname}}</td>
      <td>{{$food->price}}</td>
      <td>{{$food->placeorder}}</td>
      <td>{{$food->deliverydatetime}}</td>
      <td>{{$food->placedeliver}}</td>
      <td><a href="{{action('DisplayFoodController@edit',$food->status)}}">{{$food->status}}</td>
      
    </tr>
    @endforeach
</table>
</div>
@endsection


