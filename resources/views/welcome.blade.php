@extends('layout.master')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="top-right links">
            <a href="{{ url('/') }}">Home</a>
        </div>
        <div class="content">
            <div class="title m-b-md">
                Benz Matrix Inverter
            </div>
            <div>
            {!! Form::open(['url' => '/dimension', 'method' => 'GET']) !!}
            <!-- Dimension Form Input -->
                <div class="form-group {{ $errors->has('dimension')? 'has-error' : '' }}">
                    {!! Form::text('dimension', null, ['class' => 'form-control', 'placeholder' => 'Enter the matrix dimension'])  !!}
                    {!! $errors->first('dimension','<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
                </div>
                {!! Form::close() !!}
            </div>

            @if(isset($dimension))
                <h3>Enter matrix</h3>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul style="text-align: left">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div align="center">
                    {!! Form::open(['url' => '/dimension/'.$dimension,'class' => 'form-inline']) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @for($i = 1; $i <= $dimension; $i++)
                            @for($j = 1; $j <= $dimension; $j++)
                                <!-- A Form Input -->
                                <div class="form-group {{ $errors->has('A'.$i.$j)? 'has-error' : '' }} matrix-form">
                                    {!! Form::text('A'.$i.$j, null, ['class' => 'form-control', 'placeholder' => 'A'.$i.'-'.$j])  !!}
                                </div>
                            @endfor
                                <br>
                        @endfor
                        <br>
                        <div style="width: 100px">
                            {!! Form::submit('Get Inverse', ['class' => 'btn btn-default btn-block']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            @endif
        </div>
    </div>
@endsection