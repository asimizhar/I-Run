@extends('layouts.app')
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-left {
                align-items: left;
                display: flex;
                justify-content: left;
            }
            .flex-right {
                align-items: right;
                display:flex ;
                justify-content: right;
            }

            .position-ref {
                position: fixed;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 25px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display:inline;
            }

            .link > a {
                color: #636b6f;
                padding: 25px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display:block;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

@section('content')
<div class=" flex-right full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    @else
                        <!-- <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a> -->
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="link">
                    <a href="/home"> <span class="fa fa-navicon" style="font-size:15px"> Dashboard</span></a>
                    <a href="/user"><span class="fa fa-inbox" style="font-size:15px"> Order List</span></a>
                    <a href="/booking"><span class="fa fa-cart-plus" style="font-size:15px"> Booking Services</span></a>
                    <!-- <a href="/rating">Rating Services</a> -->
                    
                </div>
            </div>
        

<div class="container">
<div class="row">
 <div class="col-md-12">
 <br/>
 <h3 allign="center">Order Status</h3>
 <br/>
 
 <table class="table table-bordered sortable">
   <tr>
       <th>Customer Name</th>
       <th>Food Name</th>
       <th>Delivery Date and Time</th>
       <th>Status</th>
    </tr>

    @foreach ($displaystatus as $food)
    <tr>
      <td>{{$food->name}}</td>
      <td>{{$food->foodname}}</td>
      <td>{{$food->deliverydatetime}}</td>
      <td>{{$food->status}}</td>
      
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection


