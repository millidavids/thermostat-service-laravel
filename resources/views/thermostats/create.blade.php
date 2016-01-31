@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Thermostat</div>
                <div class="panel-body">
                    {{ Form::open(array('action' => ['ThermostatController@store', $user_id] )) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name') }}
                        </div>

                        {{ Form::submit('Create the thermostat!', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

