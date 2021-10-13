@extends('adminlte::page')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Preferencias</h1>
    </div>
    <div class="row">
        <div class="card  mx-auto">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('preferences.index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Search">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <a href="{{ route('preferences.create') }}" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($preferences as $preference)
                            <tr>
                                <th scope="row">{{ $preference->id }}</th>
                                <td>{{ $preference->description }}</td>
                                <td>
                                    <a href="{{ route('preferences.edit', $preference->id) }}"
                                        class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
     
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
            {{ $preferences->links() }}
</div>
        </div>
    </div>
    <style>
        .table td, .table th {
    padding: .4rem;}
    </style>
@endsection