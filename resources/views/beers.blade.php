@extends('welcome')

@section('content')
    <beers :beers='{{ $beers }}'></beers>
@endsection