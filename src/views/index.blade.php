@extends('adminlite::layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="orange">
                    <i class="material-icons">supervisor_account</i>
                </div>
                <div class="card-content">
                    <p class="category">Utilisateurs</p>
                    <h3 class="title">{{ \App\User::count() }}</h3>
                </div>
            </div>
        </div>
    </div>

    @include('adminlite::layouts.flash')

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title">Utilisateurs</h4>
                    <p class="category">Voir tous les <a href="{{ route('admin.users') }}">Utilateurs</a></p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <th>ID</th>
                            <th>Pseudo</th>
                            <th>E-mail</th>
                            <th>Date de création</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td> {{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop