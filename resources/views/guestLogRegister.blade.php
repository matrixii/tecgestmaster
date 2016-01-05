
@extends('layouts.base')

@section('title', 'Page Title')
@section('bclass', 'menubar-hoverable header-fixed ')

@section('content')
    <section class="section-account">
        <div class="img-backdrop" style="background-image: url('/assets/img/img16p.png')"></div>
        <div class="spacer"></div>
        <div class="card contain-sm style-transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <br/>
                        <span class="text-lg text-bold text-primary">Login</span>
                        <br/><br/>
                        <form class="form floating-label" action="/guest/login" accept-charset="utf-8" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password">
                                <label for="password">Password</label>
                                <p class="help-block"><a href="#">Dimenticata?</a></p>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <div class="checkbox checkbox-inline checkbox-styled">
                                        <label>
                                            <input name="ricordami" type="checkbox"> <span>Ricordami</span>
                                        </label>
                                    </div>
                                </div><!--end .col -->
                                <div class="col-xs-6 text-right">
                                    <button class="btn btn-primary btn-raised" type="submit">Login</button>
                                </div><!--end .col -->
                            </div><!--end .row -->
                        </form>
                    </div><!--end .col -->
                    <div class="col-sm-5 col-sm-offset-1 text-center">
                        <br><br>
                        <h3 class="text-light">
                            Non hai un account?
                        </h3>
                        <a class="btn btn-block btn-raised btn-primary" href="/guest/register">Registrati</a>
                        <br><br>
                        <h3 class="text-light">
                            oppure
                        </h3>
                        <p>
                            <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i>Login con Facebook</a>
                        </p>

                    </div><!--end .col -->
                </div><!--end .row -->
            </div><!--end .card-body -->
        </div><!--end .card -->
    </section>

@endsection