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
                                        <div class="col-sm-4">
                                            {{ $thermostat->name }}
                                        </div>
                                        <div class="col-sm-4">
                                            {{ 'current temperature' }}
                                        </div>
                                        <div class="col-sm-4">
                                            {{ 'current humidity' }}
                                        </div>

                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>You have no thermostats.</p>
                        {{ link_to_route('users.thermostats.create','Create one?', Auth::user()->id) }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
