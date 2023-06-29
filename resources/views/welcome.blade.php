@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <h1>Welcome Page</h1>
        <div class="row g-4">
            <div class="col">
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Company</th>
                                <th scope="col">Departure</th>
                                <th scope="col">Arrival</th>
                                <th scope="col">Departure Time</th>
                                <th scope="col">Arrival Time</th>
                                <th scope="col">Train Code</th>
                                <th scope="col">Carriage</th>
                                <th scope="col">On Time</th>
                                <th scope="col">Deleted</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                                <tr>
                                    <th scope="row">{{ $train->id }}</th>
                                    <td>{{ $train->company }}</td>
                                    <td>{{ $train->departure_station }}</td>
                                    <td>{{ $train->arrival_station }}</td>
                                    <td>{{ $train->departure_time }}</td>
                                    <td>{{ $train->arrival_time }}</td>
                                    <td>{{ $train->train_code }}</td>
                                    <td>{{ $train->train_carriages }}</td>
                                    {{-- @php
                                        if ($train->on_time == 1) {
                                            $train->on_time = 'YES';
                                        } else {
                                            $train->on_time = 'NO';
                                        }
                                    @endphp --}}

                                    @if ($train->on_time == 1)
                                        <td>YES</td>
                                    @else
                                        <td>NO</td>
                                    @endif

                                    @if ($train->deleted == 1)
                                        <td>YES</td>
                                    @else
                                        <td>NO</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
