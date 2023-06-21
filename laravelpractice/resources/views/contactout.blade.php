@extends('template.template')

@section('title')
    Contact Us
@endsection


@section('content')
    <h1>Thank You {{$name}}</h1>
    <p>Your message "{{$message}}" has been submitted</p>
    <p>Submitted by your email address {{$email}}</p>
@endsection