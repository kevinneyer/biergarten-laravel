@extends('welcome')

@section('content')
    <beerPage :beer='{{ $beer }}'></beerPage>
@endsection