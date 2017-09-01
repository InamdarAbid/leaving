@extends('layout.index')

@section('content')
<p>Student doesn't exist please enter a valid id</p>
<a href="{{url('/homepage')}}"><button class = 'btn btn-success'>Go Back</button></a>
@endsection