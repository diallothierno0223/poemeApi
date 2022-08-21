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
					<h1 class="page-title">MODIFIE</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">modifier {{$poeme->title}} </h3>
							
							<hr>

							<form method="POST" action="{{ route('poeme.update',["poeme" => $poeme->id]) }}">
                                @csrf
                                @method("PATCH")
								<div class="top-margin">
                                    <label for="title" class="">{{ __('titre') }}</label>

                                    <div class="">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $poeme->title }}" required autocomplete="title" autofocus>

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
                                        <textarea id="content" rows="10"  class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content">{{ $poeme->content }}</textarea>

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
                                            {{ __('mettre a jours') }}
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
