@extends('app')

@section('content')
    <h1>Enter information on Birds</h1>

    <hr>
    <div class="col-md-6">
    {!! Form::open(['url'=>'submit']) !!}
        <div class="form-group">
            {!! Form::label('picture','Picture:') !!}
            {!! Form::file('picture',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('commonName','Common Name:') !!}
            {!! Form::text('commonName',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('scientificName','Scientific Name:') !!}
            {!! Form::text('scientificName',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('localStatus','Local Status:') !!}
            {!! Form::text('localStatus',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('generalDescription','General Description:') !!}
            {!! Form::text('generalDescription',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('diet','Diet:') !!}
            {!! Form::text('diet',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('localBreeding','Diet:') !!}
            {!! Form::text('localBreeding',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('trivia','Trivia:') !!}
            {!! Form::text('trivia',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Bird',['class'=>'btn btn-success form-control']) !!}
        </div>
        <div class="form-group">
           {!! Form::button('Cancel',['class'=>'btn btn-danger form-control','onclick'=>'window.location.href="/"']) !!}
        </div>
    {!! Form::close() !!}
    </div>
@stop