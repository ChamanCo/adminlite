@extends('adminlite::layouts.app')
@section('title', "Création d'un utilisateur")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title">Création d'un utilisateur</h4>
                </div>
                <div class="card-content">
                    @include('adminlite::layouts.flash')
                    <form action="{{ route('admin.users.create') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label" for="name">Pseudo</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label" for="password">Mot de passe</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label" for="password_confim">Mot de passe (Confirmation)</label>
                                    <input type="password" class="form-control" name="password_confirm" id="password_confim">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success pull-right">Ajouter</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop