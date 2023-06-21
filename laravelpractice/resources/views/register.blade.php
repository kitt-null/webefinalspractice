@extends('template.template')

@section('title')
    Registration
@endsection


@section('content')
    <h1>Registration Page</h1>
    <form action="{{route('registerin')}}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
                @error('name')
                    <span style="color:red">{{$message}}</span>
                @enderror
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="username">Username</label>
            @error('username')
                    <span style="color:red">{{$message}}</span>
            @enderror
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="password">Password</label>
            @error('password')
                    <span style="color:red">{{$message}}</span>
                @enderror
            <input type="password" name="password" id="password">
        </div>
        
        <div>
            <button>Submit</button>
        </div>
    </form>
        
@endsection