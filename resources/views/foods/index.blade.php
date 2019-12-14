@extends('layouts.app')

@section('content')
<div class="container" style="background-color:papayawhip">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding:10px">
            <div class="card">
                <div class="card-header" style="background-color:lightgoldenrodyellow">List of Foods</div>
                <div class="card-body" style="background-color:lightyellow">
                    <ul>
                        @foreach ($foods as $food)
                            <li>
                                <a href="foods/{{$food->id}}">
                                    {{$food->foodname}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <a href="foods/create" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
