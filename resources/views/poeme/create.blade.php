@extends('layouts.app')

@section('content')
<header id="head" class="secondary"></header>


	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">modifie un nouveau poeme </h3>
							<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.html">Login</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
							<hr>

							<form method="POST" action="{{ route('poeme.store') }}">
                                @csrf
								<div class="top-margin">
                                    <label for="title" class="">{{ __('titre') }}</label>

                                    <div class="">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
								</div>
								<div class="top-margin">
                                    <label for="content" class="">{{ __('Poeme') }}</label>

                                    <div class="">
                                        <textarea id="content" rows="5"  class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content">{{ old('content') }}</textarea>

                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										                     
									</div>
									<div class="col-lg-4 text-right">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
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
	</div>	<!-- /container -->

@endsection
