@extends('layouts.app')

@section('content')
    <div>
        <h1>
            Update Car
        </h1>
    </div>

    <div>
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <input type="text" name="name" value={{ $car->name }} placeholder="Brand name....">
                <input type="text" name="founded" value={{ $car->founded }} placeholder="Founded....">
                <input type="text" name="description" value={{ $car->description }} placeholder="Description....">

                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
