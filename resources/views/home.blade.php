@extends('layout')

@section('page')
    <div>
        <div class="container">
            < class="jumbotron">
                <h1>Name</h1>
                <ul>
                    @foreach($names as $name)
                        <li><strong>{{ $name }}</strong></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
