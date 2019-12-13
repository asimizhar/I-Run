@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Item</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('items.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="referenceno" class="col-md-4 col-form-label text-md-right">Reference No.</label>
                         
                            <div class="col-md-6">
                                <input id="referenceno" type="text" class="form-control @error('referenceno') is-invalid @enderror" name="referenceno" value="{{ old('referenceno') }}" autocomplete="referenceno" autofocus>
                         
                                @error('referenceno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pickup" class="col-md-4 col-form-label text-md-right">Pick-Up Item From</label>
                         
                            <div class="col-md-6">
                                <input list="pickup" type="text" class="form-control @error('pickup') is-invalid @enderror" name="pickup" value="{{ old('pickup') }}" autocomplete="pickup" autofocus>
                                <datalist id="pickup">
                                <option>Unistorage</option>
                                <option>Ezibox</option>
                                <option>Post Office Sri Gombak</option>
                                <option>Post Office Taman Melawati</option>
                                </datalist>
                         
                                @error('pickup')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="delivertime" class="col-md-4 col-form-label text-md-right">Deliver Date and Time</label>
                         
                            <div class="col-md-6">
                                <input id="delivertime" type="datetime-local" class="form-control @error('delivertime') is-invalid @enderror" name="delivertime" value="{{ old('delivertime') }}" autocomplete="delivertime" autofocus>
                         
                                @error('delivertime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deliverto" class="col-md-4 col-form-label text-md-right">Deliver Place</label>
                         
                            <div class="col-md-6">
                                <input list="deliverto" type="text" class="form-control @error('deliverto') is-invalid @enderror" name="deliverto" value="{{ old('deliverto') }}" autocomplete="deliverto" autofocus>
                                <datalist id="deliverto">
                                <option value="Mahallah Ali">
                                <option value="Mahallah Zubair">
                                <option value="Mahallah Bilal">
                                <option value="Mahallah Siddiq">
                                <option value="Mahallah Uthman">
                                <option value="Mahallah Farouq">
                                </datalist>
                         
                                @error('deliverto')
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
                                <a href="{{ route('items.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

