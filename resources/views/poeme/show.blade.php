@extends('layouts.app')

@section('content')
<!-- container -->
<header id="head" class="secondary"></header>

<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">User access</li>
    </ol>

    <div class="row">
        
        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">poeme</h1>
            </header>
            
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0">
                <div class="">
                      <h2>{{$poeme->title}}</h2>
                      @foreach(explode("__", $poeme->content) as $line)
                          <p>{{$line}}</p>
                      @endforeach
                      <p class="align-right"><strong>{{$poeme->user->name}}</strong>| le {{\Carbon\Carbon::parse($poeme->created_at)->format("d/m/Y")}}</p>
                </div>

            </div>
            
        </article>
        <!-- /Article -->

    </div>
</div>	<!-- /container -->

@endsection
