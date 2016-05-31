@extends('app')

@section('content')
    <style type="text/css">
        #display-text{
            border: solid black 1px;
            height:20rem;
            padding:1rem;
        }
        .block{
            float:left; 
            width:50%; 
        }
    </style>
    <h1 class="header">Enter information For Photo Of The Month</h1>

    <hr>
    <div class="col-md-6">
    {!! Form::open(['url'=>'submit-photo', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('photo','Photo:') !!}
            {!! Form::file('photo',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('month','Enter Month:') !!}
            {!! Form::selectMonth('month',null,['class'=>'form-control', 'required'=>true]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('year','Enter Year:') !!}
            {!! Form::selectRange('year', 2016, 2050,null, ['class'=>'form-control', 'required'=>true, 'value'=>'2016']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo-by','Photo by:') !!}
            {!! Form::text('photo-by', null, ['class'=>'form-control', 'required'=>true]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('caption','Caption:') !!}
            {!! Form::text('caption', null, ['class'=>'form-control', 'required'=>true]) !!}
        </div>
        <div style="width:200%;">
            <div style="float:left; width:50%;">
                <div class="form-group" >
                    {!! Form::label('description','Description:') !!}
                    {!! Form::textarea('description',null, ['class'=>'form-control', 'required'=>true]) !!}
                </div>
                <div class="form-group">
                   {!! Form::button('Check',['class'=>'btn btn-default form-control','onclick'=>'display()']) !!}
                </div>
            </div>
        <div class="block" style="padding-left:1rem;">
            <label for="display-text">Display:</label>
            <div id="display-text"></div>
        </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Done',['class'=>'btn btn-success form-control']) !!}
        </div>
        <div class="form-group">
           {!! Form::button('Cancel',['class'=>'btn btn-danger form-control','onclick'=>'window.location.href="/"']) !!}
        </div>
        
    {!! Form::close() !!}
    </div>

    <script type="text/javascript">
        function display()
        {
            document.getElementById("display-text").innerHTML=document.getElementById("description").value;
        }
    </script>

@stop