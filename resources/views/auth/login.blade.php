@extends('auth.template_auth')

@section('content')

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="{{ url('adminlte/img/Logo.png') }}" width="100">
                            <h2 class="tm-block-title mt-3">Login Admin LBB Study Extra</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="input-group">
                                    <label for="email" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!-- <div class="">
                                        
                                    </div> -->
                                </div>

                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!-- <div class="">
                                        
                                    </div> -->
                                </div>

                                <div class="input-group mt-3">
                                    <button type="submit" class="btn btn-primary d-inline-block mx-auto">
                                        {{ __('Login') }}
                                    </button>
                                    <!-- <div class="">
                                        
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection