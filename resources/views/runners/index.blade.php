@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-12">
 <br/>
 <h3 allign="center">Food Order</h3>
 <br/>
 <table class="table table-bordered">
   <tr>
       <th>Food Name</th>
       <th>Price</th>
       <th>Restaurant/Cafe</th>
       <th>Delivery Date and Time</th>
       <th>Place To Deliver</th>
    </tr>

    @foreach ($runners as $runner)
    <tr>
      <td>{{$runner->name}}</td>
      <td>{{$runner->price}}</td>
      <td>{{$runner->placeorder}}</td>
      <td>{{$runner->deliverydatetime}}</td>
      <td>{{$runner->placedeliver}}</td>
      
    </tr>
    @endforeach
</table>
@endsection


