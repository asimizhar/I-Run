@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-12">
 <br/>
 <h3 allign="center">Item Order</h3>
 <br/>
 <table class="table table-bordered">
   <tr>
       <th>Customer Name</th>
       <th>Reference no</th>
       <th>Item Pickup Place</th>
       <th>Delivery Date and Time</th>
       <th>Place To Deliver</th>
    </tr>

    @foreach ($displayitem as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->referenceno}}</td>
      <td>{{$item->pickup}}</td>
      <td>{{$item->delivertime}}</td>
      <td>{{$item->deliverto}}</td>
      
    </tr>
    @endforeach
</table>
</div>

@endsection
