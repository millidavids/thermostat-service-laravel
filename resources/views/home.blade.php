@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Thermostats</div>
                <div class="panel-body">
                    @if (Auth::user()->thermostats()->count() > 0)
                        <ul class="list-group">
                            @foreach(Auth::user()->thermostats as $thermostat)
                                <li class="list-group-item">
                                    <div class="row">
                                        <h3>
                                            {{ $thermostat->name }}
                                        </h3>
                                        <ul class="list-group">
                                        @foreach($thermostat->readings as $reading)
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        Temperature: {{ $reading->temperature }}
                                                    </div>
                                                    <div class="col-sm-6">
                                                        Temperature: {{ $reading->temperature }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>You have no thermostats.</p>
                    @endif
                    {{ link_to_route('users.thermostats.create','Create one?', Auth::user()->id) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
