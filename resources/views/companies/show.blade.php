@extends('layouts.app')

@section('content')
    <h1 class="text-center p-3">About company</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-3">
                <a href="{{ route('companies.index') }}">Back</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td>Company name</td>
                    <td>{{ $company->name }}</td>
                </tr>
                <tr>
                    <td>Company address</td>
                    <td>{{ $company->address }}</td>
                </tr>
                <tr>
                    <td>Company phone</td>
                    <td>{{ $company->phone }}</td>
                </tr>
                <tr>
                    <td>Company created at</td>
                    <td>{{ $company->created_at }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection