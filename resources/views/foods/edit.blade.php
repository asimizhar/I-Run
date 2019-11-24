@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Food Name</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('foods.destroy', $food->id) }}">
                        @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="foodname" class="col-md-4 col-form-label text-md-right">Food Name</label>
                         
                            <div class="col-md-6">
                                <input id="foodname" type="text" class="form-control @error('foodname') is-invalid @enderror" name="foodname" value="{{$food->type}}" autocomplete="foodname" autofocus>
                         
                                @error('foodname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
