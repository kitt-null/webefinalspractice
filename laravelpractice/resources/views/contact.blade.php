@extends('template.template')

@section('title')
    Contact Us
@endsection


@section('content')
    <h1>Contact Us</h1>
    <form action="{{route('contact.submit')}}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="message">Message</label>
            <input type="text" name="message" id="message">
        </div>

        <div>
            <button>Submit</button>
        </div>

    </form>
@endsection