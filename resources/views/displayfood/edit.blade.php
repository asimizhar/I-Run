@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Status</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('displayfood.destroy', $status->id) }}">
                        @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Order Status</label>
                         
                            <div class="col-md-6">
                            
                                <select id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status"  autocomplete="status" autofocus>
                                <option>{{$status->status}}</option>
                                <option>Taken</option>
                                <option>Delivered</option>
                                </select>
                                @error('status')
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
                                <a href="{{ route('displayfood.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
