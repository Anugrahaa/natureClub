@extends('app')

@section('content')
    <h1 class="header">Enter information on Butterflies</h1>

    <hr>
    <div class="col-md-6">
    {!! Form::open(['url'=>'butterfly/submit','files' => true]) !!}
        <div class="form-group">
            {!! Form::label('picture','Picture:') !!}
            {!! Form::file('picture',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('commonName','Common Name:') !!}
            {!! Form::text('commonName',null,['class'=>'form-control', 'required'=>true]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('scientificName','Scientific Name:') !!}
            {!! Form::text('scientificName',null,['class'=>'form-control', 'required'=>true]) !!}
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
            {!! Form::label('hostPlants','Host Plants:') !!}
            {!! Form::text('hostPlants',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lifeCycle','Life Cycle:') !!}
            {!! Form::text('lifeCycle',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('trivia','Trivia:') !!}
            {!! Form::text('trivia',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('hotspot','Hotspot: ') !!}
            {!! Form::file('hotspot',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('images','Images: (upload only .jpg files)') !!}
            {!! Form::file('images[]',['multiple'=>true, 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Butterfly',['class'=>'btn btn-success form-control']) !!}
        </div>
        <div class="form-group">
           {!! Form::button('Cancel',['class'=>'btn btn-danger form-control','onclick'=>'window.location.href="/"']) !!}
        </div>
        
    {!! Form::close() !!}
    </div>
@stop

