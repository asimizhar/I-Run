@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Foods</div>
                <div class="card-body">
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
