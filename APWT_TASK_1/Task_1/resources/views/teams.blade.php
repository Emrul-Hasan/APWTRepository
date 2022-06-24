@extends('layouts.app')
@section('content')

<h1 style=" text-align: center; color: blue;">Our Teams Members</h1>


<ul>
@foreach($teams as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection