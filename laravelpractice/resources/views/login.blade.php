@extends('template.template')

@section('title')
    Log In
@endsection


@section('content')
    <h1>Log In Page</h1>
    @error('message')
        <p>{{$message}}</p>
    @enderror

    <form action="{{route('login.submit')}}" method="POST">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        
        <div>
            <button>Submit</button>
        </div>
    </form>
        
@endsection