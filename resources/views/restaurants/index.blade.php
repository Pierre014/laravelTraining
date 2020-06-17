

@extends('/restaurants/layout')

@section('content')
    <h1> display restaurant </h1>

    @foreach ($restaurants as $restaurant)
        <h2> {{$restaurant->name}} </h2>
        <p> {{$restaurant->description}} </p>
    @endforeach
@endsection
 
