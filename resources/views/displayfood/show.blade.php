@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Status</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="status" class="col-md-4 col-form-label text-md-right">Order Status</label>
                        
                        <div class="col-md-6">
                            <input disabled id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{$status->status}}" autocomplete="status" autofocus>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <form method="POST" action="{{ route('displayfood.destroy', $status->id)}}">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('displayfood.edit', $status->id) }}" class="btn btn-primary">Edit</a>
                                
                                <a href="{{ route('displayfood.index') }}" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
