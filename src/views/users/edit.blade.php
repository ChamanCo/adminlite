@extends('adminlite::layouts.app')
@section('title', "Edition de " . $user->name)

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title">Edition de {{ $user->name }}</h4>
                </div>
                <div class="card-content">
                    @include('adminlite::layouts.flash')
                    <form action="{{ route('admin.users.edit', $user) }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" placeholder="Pseudo">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="Email" disabled>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="password">Mot de passe</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="password_confim">Mot de passe (Confirmation)</label>
                                    <input type="password" class="form-control" name="password_confirm" id="password_confim">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success pull-right">Editer</button>
                        <a href="{{ route('admin.users.delete', $user) }}" class="btn btn-danger pull-right">Supprimer</a>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop