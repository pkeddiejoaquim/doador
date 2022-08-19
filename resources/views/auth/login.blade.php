@extends('layouts.app')

@section('content')
<!-- Modal -->
<div id="caModal" class="modal" style="background-color: rgba(0, 0, 0, 0.3); opacity: 0.9;">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="z-index:1060; top:100px;">
                        <div class="card-header" style='min-height: 30px !important; background-image: linear-gradient(to top, #0075be, #005a9c); color: rgb(255, 255, 255);'>
                            <img width='20px;' src="{{ url('images/sistema/att-cubo-branco.png') }}" id="ca"/>
                            {{ __('Login') }}
                            <a href="javascript:history.back()"><button  type="button" class="close"
                               data-dismiss="modal">&times;</button>
                            </a>
                        </div>

                        <div class="card-body" style="padding-top:40px;">
                            <form method="POST" action="{{ route('login') }}">

                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('e-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Lembrar') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __("Esqueceu sua Senha?") }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection

<script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    jQuery(document).ready(function() {
       jQuery('#caModal').css('display','block');

    });
</script>
<script>
    new Vue({
    el:'#app',
    template: `

    `
    })
</script>
