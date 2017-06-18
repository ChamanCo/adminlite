@extends('adminlite::layouts.app')
@section('title', 'Utilisateurs')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title">
                        Liste des utilisateurs
                        <a href="{{ route('admin.users.create') }}" class="pull-right">
                            <i class="material-icons">add</i>
                        </a>
                    </h4>

                </div>
                <div class="card-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Pseudo</th>
                                <th>E-mail</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $user) }}" class="text-info" data-toggle="tooltip" title="Editer">
                                            <i class="material-icons">mode_edit</i>
                                        </a>
                                        <a href="{{ route('admin.users.delete', $user) }}" class="text-danger" data-toggle="tooltip" title="Supprimer">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop