@extends('layouts.app')
@section('content')
    <h1 class="text-center">Lists of Companies</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('companies.create') }}">
            <button class="btn btn-success" type="button">add company</button>
        </a>
        </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>PHONE</th>
                <th>Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ ($companies->currentpage()-1)*$companies->perpage() + ($loop->index+1) }}</td>
                        <td>
                            <a href="{{ route('companies.show', ['company' => $company->id]) }}">{{ $company->name }}</a>
                        </td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->phone }}</td>
                        <td><a class="btn btn-info" href="{{ route('companies.edit', ['company' => $company->id]) }}"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    {{ $companies->links() }}
@endsection
