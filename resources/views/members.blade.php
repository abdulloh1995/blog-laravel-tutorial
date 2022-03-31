@extends('app')

@section('title')
    members
@endsection

@section('content')
    <h1>members page</h1>
    <ul>
        @forelse ($members as $member)
            <li>{{ $member }}</li>
            @empty
                <p>NO DATA</p>
        @endforelse
    </ul>
@endsection