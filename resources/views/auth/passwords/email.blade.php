@extends('layouts.app')

@section('content')
<header id="head" class="secondary"></header>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">User access</li>
    </ol>

    <div class="row ">
        <div class="row">
        
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Sign in</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">reset your password to your account</h3>
                            <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signup.html">fargot password</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
                            <hr>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div><hr>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="top-margin">
                                    <label for="email" class="">{{ __('E-Mail Address') }}</label>
                    
                                    <div class="">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row mb-0">
                                    <div class="top-margin offset-md-4   col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
    
                </div>
                
            </article>
            <!-- /Article -->
    
        </div>
    </div>
</div>
@endsection

