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

            <div class="content">
                <div class="link">
                    <a href="/home">Dashboard</a>
                    <a href="/user">Runner</a>
                    <a href="/booking">Booking Services</a>
                    <a href="/rating">Rating Services</a>
                    
                </div>
            </div>
        </div>
@endsection
