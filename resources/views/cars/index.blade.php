@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>
                Cars
            </h1>
        </div>

    <div>
        <a href="cars/create">Add a new car &rarr;</a>
    </div>

        <div>
            @foreach ($cars as  $car)
            <div>
                <div>
                    <a href="cars/{{ $car->id }}/edit">Edit &rarr;</a>
                    <form action="/cars/{{ $car->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button>Delete &rarr;</button>
                    </form>
                </div>

                <span>
                    Founded: {{ $car->founded }}
                </span>
                <h2>
                    <a href="/cars/{{ $car->id }}">
                        {{ $car->name }}    
                    </a>
                </h2>
                <p>
                    {{ $car->description }}
                </p>
                <hr>
            </div>
            @endforeach
        </div>
    </div>
@endsection
