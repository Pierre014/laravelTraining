@extends('/restaurants/layout')

@section('content')
    <h1> page create</h1>

        <form action="/restaurants/create" method='post'>
             {{ csrf_field() }}
            <label for="name">Title of the restaurant</label>
            <input type="text" name="name" id="name">
            <input type="submit" value="Submit"></input> 
        </form>
@endsection
        
