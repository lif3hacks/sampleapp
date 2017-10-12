@extends('layout')

@section('page')
    <div>
        <div class="container">
            <div class="jumbotron">
                <h1>Name</h1>
                @foreach($names as $name)
                    <li><strong>{{ $name }}</strong></li>
                @endforeach
            </div>
        </div>
    </div>
@endsection
