@extends('layouts.app')
<title>I-Run</title>
@section('content')

<div class="container" style="background-color:papayawhip">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding:10px">
            <div class="card">
                <div class="card-header" style="background-color:lightgoldenrodyellow">Update Status</div>
                <div class="card-body"  style="background-color:lightyellow">

                    <form method="POST" action="{{ route('displayitem.destroy', $status->id) }}">
                        @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="itemstatus" class="col-md-4 col-form-label text-md-right">Order Status</label>
                         
                            <div class="col-md-6">
                            
                                <select id="itemstatus" type="text" class="form-control @error('itemstatus') is-invalid @enderror" name="itemstatus"  autocomplete="itemstatus" autofocus>
                                <option>{{$status->itemstatus}}</option>
                                <option>Taken</option>
                                <option>Delivered</option>
                                </select>
                                @error('itemstatus')
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
                                <a href="{{ route('displayitem.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
