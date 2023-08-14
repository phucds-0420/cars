@extends('layouts.app')

@section('content')
<div>
    <div>
        <h1>
            {{ $car->name }}
        </h1>
    </div>

    <div>
        <div>
            <span>
                Founded: {{ $car->founded }}
            </span>
            <p>
                {{ $car->description }}
            </p>

            <table>
                <tr>
                    <th>
                        Model
                    </th>
                    <th>
                        Engine
                    </th>
                    <th>
                        Date
                    </th>
                </tr>
                @forelse ($car->carModels as $model)
                    <tr>
                        <td>
                            {{ $model->model_name }}
                        </td>

                        <td>
                            @foreach ($car->engines as $engine)
                                @if ($model->id === $engine->model_id)
                                    {{ $engine->engine_name }}
                                @endif
                            @endforeach
                        </td>

                        <td>
                            {{ date('d-m-y', strtotime($car->productionDate->created_at)) }}
                        </td>
                    </tr>
                @empty
                    <p>
                        No car model found
                    </p>
                @endforelse
            </table>
            
            <div>
                <p>
                    Product types:
                    @forelse ($car->products as $product)
                        {{ $product->name }}
                    @empty
                        <p>
                            No car product description
                        </p>
                    @endforelse
                </p>
            </div>
        </div>
    </div>
</div>
@endsection