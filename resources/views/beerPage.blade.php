@extends('welcome')

@section('content')
    <beerpage :beer='{{ $beer }}'></beerpage>
@endsection