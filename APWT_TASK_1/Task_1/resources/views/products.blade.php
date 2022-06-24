@extends('layouts.app')
@section('content')

<h1 style=" text-align: center; color: blue;">Product List</h1>


<ul>
@foreach($products as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection