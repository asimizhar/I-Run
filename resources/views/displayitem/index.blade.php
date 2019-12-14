@extends('layouts.app')

@section('content')
<div class="container" style="background-color:papayawhip" >
<div class="row">
 <div class="col-md-12">
 <br/>
 <h3 allign="center">Item Order</h3>
 <br/>
 <table class="table table-bordered sortable" >
   <tr style="background-color:lightgoldenrodyellow">
       <th>Customer Name</th>
       <th>Reference no</th>
       <th>Item Pickup Place</th>
       <th>Delivery Date and Time</th>
       <th>Place To Deliver</th>
       <th>Status</th>
    </tr>

    @foreach ($displayitem as $item)
    <tr style="background-color:lightyellow">
      <td>{{$item->name}}</td>
      <td>{{$item->referenceno}}</td>
      <td>{{$item->pickup}}</td>
      <td>{{$item->delivertime}}</td>
      <td>{{$item->deliverto}}</td>
      <td>{{$item->itemstatus}}</td>
      
    </tr>
    @endforeach
</table>
</div>
</div>

@endsection
