@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="padding: 20px 300px; width:800px; position:center;background:rgba(130,130,130,.3);  padding: 20px 22px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4); opacity:0.8">
                <div class="card-header" style="color:white;margin-left:10px;margin-bottom: 10px;font-size: 20px">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:white;margin-left:10px;margin-bottom: 10px;font-size: 20px">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
