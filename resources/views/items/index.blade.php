@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parcel Tracking Number</div>
                <div class="card-body">
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
