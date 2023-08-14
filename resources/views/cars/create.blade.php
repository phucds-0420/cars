@extends('layouts.app')

@section('content')
    <div>
        <h1>
            Create Car
        </h1>
    </div>

    <div>
        <form action="/cars" method="POST">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Brand name....">
                <input type="text" name="founded" placeholder="Founded....">
                <input type="text" name="description" placeholder="Description....">

                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    @if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    </div>
    @endif
@endsection
