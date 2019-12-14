@extends('layouts.app')

@section('content')

<div class="container" style="background-color:papayawhip">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding:10px">
            <div class="card">
                <div class="card-header" style="background-color:lightgoldenrodyellow">Add Food</div>
                <div class="card-body" style="background-color:lightyellow">
                    <form method="POST" action="{{ route('foods.store') }}">
                        @csrf

                        <div class="form-group row" >
                            <label for="type" class="col-md-4 col-form-label text-md-right">Food Name</label>
                         
                            <div class="col-md-6" >
                                <input id="foodname" type="text" class="form-control @error('type') is-invalid @enderror" name="foodname" value="{{ old('foodname') }}" autocomplete="foodname" autofocus>
                         
                                @error('foodname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                         
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" autocomplete="price" autofocus>
                         
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="placeorder" class="col-md-4 col-form-label text-md-right">Restaurant/Cafe Name</label>
                         
                            <div class="col-md-6">
                                <input list="placeorder" type="text" class="form-control @error('price') is-invalid @enderror" name="placeorder" value="{{ old('placeorder') }}" autocomplete="placeorder" autofocus>
                                <datalist id="placeorder">
                                <option>Cafe Ali</option>
                                <option>Cafe Zubair</option>
                                <option>Cafe Bilal</option>
                                <option>Cafe Siddiq</option>
                                <option>Cafe Uthman</option>
                                <option>Cafe Farouq</option>
                                </datalist>
                         
                                @error('placeorder')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deliverydatetime" class="col-md-4 col-form-label text-md-right">Delivery Date & Time</label>
                         
                            <div class="col-md-6">
                                <input id="deliverydatetime" type="datetime-local" class="form-control @error('type') is-invalid @enderror" name="deliverydatetime" value="{{ old('deliverydatetime') }}" autocomplete="deliverydatetime" autofocus>
                         
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="placedeliver" class="col-md-4 col-form-label text-md-right">Place To Receive Order</label>
                         
                            <div class="col-md-6">
                                <input list="placedeliver" type="text" class="form-control @error('price') is-invalid @enderror" name="placedeliver"  autocomplete="placedeliver" autofocus>
                                <datalist id="placedeliver">
                                <option value="Mahallah Ali">
                                <option value="Mahallah Zubair">
                                <option value="Mahallah Bilal">
                                <option value="Mahallah Siddiq">
                                <option value="Mahallah Uthman">
                                <option value="Mahallah Farouq">
                                </datalist>
                         
                                @error('placedeliver')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                                <a href="{{ route('foods.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

