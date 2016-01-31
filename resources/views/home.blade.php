@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Thermostats</div>
                <div class="panel-body">
                    @if (Auth::user()->thermostats()->count() > 0)
                        <p>You have thermostats.</p>
                    @else
                        <p>You have no thermostats.</p>
                        {{ link_to_route('users.thermostats.create','lol', Auth::user()->id) }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
