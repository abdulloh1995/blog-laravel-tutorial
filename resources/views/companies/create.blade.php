@extends('layouts.app')

@section('content')
    <h1 class="text-center p-3">Create company</h1>
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('companies.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Company name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Company address</label>
                    <input type="text" class="form-control" id="address" name="address">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Company phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                {{-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-success">Save</button>
                </form>
        </div>
    </div>
@endsection