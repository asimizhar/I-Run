@extends('layouts.app')

<title>I-Run</title>
@section('content')
        

<div class="container" style="background-color:papayawhip" >
<div class="row">
 <div class="col-md-12">
 <br/>
 <h3 allign="center">Order Status</h3>
 <br/>
 
 <table class="table table-bordered sortable">
   <tr style="background-color:lightgoldenrodyellow">
       <th>Food ID</th>
       <th>Customer Name</th>
       <th>Food Name</th>
       <th>Delivery Date and Time</th>
       <th>Status</th>
    </tr>

    @foreach ($displaystatus as $food)
    <tr style="background-color:lightyellow">

      <td>{{$food->id}}</td>
      <td>{{$food->name}}</td>
      <td>{{$food->foodname}}</td>
      <td>{{$food->deliverydatetime}}</td>
      <td>{{$food->status}}</td>
      
    </tr>
    @endforeach
    </tr>
</table>
<table class="table table-bordered sortable">
<tr style="background-color:lightgoldenrodyellow">
       <th>Item ID</th>
       <th>Customer Name</th>
       <th>Reference No</th>
       <th>Delivery Date and Time</th>
       <th>Status</th>
    </tr>
    @foreach ($status as $item)
    <tr style="background-color:lightyellow">
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->referenceno}}</td>
      <td>{{$item->delivertime}}</td>
      <td>{{$item->itemstatus}}</td>
    </tr>
      @endforeach

      </table>
</div>
</div>
@endsection


