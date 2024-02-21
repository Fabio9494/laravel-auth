@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">

                <table class="table table-primary table-striped  p-3 border  mt-4">
                    <thead class="">
                        <tr>
                            <th>TITOLO</th>
                            <th>DATA</th>
                            <th>DESCRIZIONE</th>
                            <th>AUTORE</th>
                            <th>SLUG</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project['title'] }}</td>
                                <td>{{ date('d/m/Y', strtotime($project['date'])) }}</td>
                                <td>{{ $project['description'] }}</td>
                                <td>{{ $project['author'] }}</td>
                                <td>{{ $project['slag'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
