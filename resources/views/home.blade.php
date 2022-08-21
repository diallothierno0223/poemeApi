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
                <h1 class="page-title">dashboard</h1>
            </header>
            @if (Session::has("success"))
                <div class="alert alert-success">
                    <p>{{ Session::get('success')}}</p>
                </div>
            @endif
            
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0">
                <a href="{{route('poeme.create')}}" class="btn btn-primary col-md-offset-10 bottom-margin">ecrire un poeme</a>
                <div class="top-margin"></div>
                <div class="panel panel-default">
                    <table class="table table-striped">
                        <thead class="thead-danger">
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">titre</th>
                            <th scope="col">poeme</th>
                            <th scope="col">action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($poemes as $poeme)
                            <tr>
                                <th scope="row"><a href="{{route('poeme.show', ["poeme" => $poeme->id])}}">{{$poeme->id}}</a></th>
                                <td>{{$poeme->title}}</td>
                                <td>{{substr($poeme->content, 0, 60)."....."}}</td>
                                <td>
                                    <form action="{{route('poeme.destroy', ["poeme" => $poeme->id])}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <a href="{{route('poeme.edit', ["poeme" => $poeme->id])}}" class="btn btn-info">modifier</a>
                                        <button type="submit" class="btn btn-danger btn-sm">supprimer</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      
                </div>

            </div>
            
        </article>
        <!-- /Article -->

    </div>
</div>	<!-- /container -->

@endsection
