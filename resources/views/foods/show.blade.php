@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Food Name</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Food Name</label>
                        
                        <div class="col-md-6">
                            <input disabled id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$food->name}}" autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <form method="POST" action="{{ route('foods.destroy', $food->id)}}">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-primary">Edit</a>

                                <button onclick="return confirm('Are you sure?','TogetherforSDG')" type="submit" class="btn btn-danger">Delete</button>
                                
                                <a href="{{ route('foods.index') }}" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
