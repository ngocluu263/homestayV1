@extends('master')

@section('title')
    Welcome
@stop

@section('content')
<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Login</li>
        </ol>

        <div class="row" style="margin-top:10px;">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
<!--                 <header class="page-header">
                    <h1 class="page-title">Login</h1>
                </header> -->
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            
                            <h3 class="thin text-center">Sign in to your account</h3>
                            <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="/register">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
                            <hr>
                            
                            @include('errors.list')

                            <!-- <form method="get" action="/login">
                                <div class="top-margin">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="top-margin">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control">
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <b><a href="">Forgot password?</a></b>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-action" type="submit">Login</button>
                                    </div>
                                </div>
                            </form> -->

                            {!! Form::open(['url' => '/login', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                                <div class="form-group">
                                    {!! Form::label('id', 'Email', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('email', old('email'), ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password', 'password', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
                                        <a class="btn btn-link" href="{{ url('/password/email') }}">Forget password？</a>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@stop