@extends('spark::layouts.app')

@section('content')
    @include('spark::layouts.headers.light')
    <div class="main-content">
        <section class="slice slice-lg min-vh-100 d-flex align-items-center bg-section-secondary">
        <!-- SVG background -->
        <div class="bg-absolute-cover bg-size--contain d-none d-lg-block">
            <figure class="w-100">
                <img alt="" src="/assets/img/svg/backgrounds/bg-3.svg" class="svg-inject">
            </figure>
        </div>
        <div class="container py-5 px-md-0 d-flex align-items-center">
            <div class="w-100">
                <div class="row row-grid justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-sm-8 col-lg-6 col-xl-5 order-lg-2">
                        <div class="card shadow zindex-100 mb-0">
                            <div class="card-body px-md-5 py-5">
                                <div class="mb-5">
                                    <h6 class="h3">{{__('Login')}}</h6>
                                    <p class="text-muted mb-0">Sign in to your account to continue.</p>
                                </div>
                                <span class="clearfix"></span>

                                @include('spark::shared.errors')

                                <form role="form" method="POST" action="/login">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="form-control-label">{{__('E-Mail')}}</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="input-email" placeholder="name@example.com" value="{{ old('email') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">{{__('Password')}}</label>
                                            </div>
                                            <div class="mb-2">
                                                <a href="{{ url('/password/reset') }}" class="small text-muted text-underline--dashed border-primary">{{__('Forgot Your Password?')}}</a>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control" id="input-password" placeholder="Password">
                                            <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="fas fa-eye"></i>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4"><button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                                            <span class="btn-inner--text">Sign in</span>
                                            <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                        </button></div>
                                </form>
                            </div>
                            <div class="card-footer px-md-5"><small>Not registered?</small>
                                <a href="/register" class="small font-weight-bold">Create account</a></div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1 d-none d-lg-block">
                        <blockquote>
                            <h3 class="h2 mb-4">Keep your face always toward the sunshine - and shadows will fall behind you.</h3>
                            <footer>— <cite class="text-lg">John Sulivan</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-lg-8">--}}
            {{--<div class="card card-default">--}}
                {{--<div class="card-header">{{__('Login')}}</div>--}}

                {{--<div class="card-body">--}}
                    {{--@include('spark::shared.errors')--}}

                    {{--<form role="form" method="POST" action="/login">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<!-- E-Mail Address -->--}}
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-md-4 col-form-label text-md-right">{{__('E-Mail')}}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<!-- Password -->--}}
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-md-4 col-form-label text-md-right">{{__('Password')}}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="password" class="form-control" name="password">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<!-- Remember Me -->--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<label class="form-check-label">--}}
                                        {{--<input type="checkbox" name="remember" class="form-check-input"> {{__('Remember Me')}}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<!-- Login Button -->--}}
                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{__('Login')}}--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">{{__('Forgot Your Password?')}}</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
