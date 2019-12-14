@extends('layouts.app')

@section('content')
<div class="container" style="background-color:papayawhip">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding:10px">
            <div class="card" >
                <div class="card-header" style="background-color:lightgoldenrodyellow">Parcel Tracking Number</div>
                <div class="card-body" style="background-color:lightyellow">
                    <ul>
                        @foreach ($items as $item)
                            <li>
                                <a href="items/{{$item->id}}">
                                    {{$item->referenceno}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <a href="items/create" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
