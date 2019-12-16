@extends('layouts.app')

<title>I-Run</title>
@section('content')

<div class="container" style="background-color:papayawhip">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding:10px">
            <div class="card">
                <div class="card-header" style="background-color:lightgoldenrodyellow">Item Reference Number</div>
                <div class="card-body" style="background-color:lightyellow">
                    <div class="form-group row">
                        <label for="referenceno" class="col-md-4 col-form-label text-md-right">Item Reference Number</label>
                        
                        <div class="col-md-6">
                            <input disabled id="referenceno" type="text" class="form-control @error('referenceno') is-invalid @enderror" name="referenceno" value="{{$item->referenceno}}" autocomplete="referenceno" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <form method="POST" action="{{ route('items.destroy', $item->id)}}">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>

                                <button onclick="return confirm('Are you sure?','TogetherforSDG')" type="submit" class="btn btn-danger">Delete</button>
                                
                                <a href="{{ route('items.index') }}" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
