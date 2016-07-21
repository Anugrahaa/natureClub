<link href="{{  asset('packages/home/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{  asset('packages/home/css/poptrxstyle.css') }}" rel="stylesheet" type="text/css" media="all" />

<script src="{{ asset('packages/home/js/jquery-1.11.1.min.js') }}"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>

<div style="width:100%;height:100%;background-color:black;opacity:0.75;">
	<div id="bigpic" class="col-sm-4">
	<img src="{{ asset('Events/').'/'.$event['photo'] }}" style="width:100%;height:100%;">
</div>
<div class="col-sm-8" style="color:white;">
		<h3 class="text-center">{{ $event['eventName'] }}</h3>
		<p>{!!html_entity_decode($event['description'])!!}</p>
</div>
</div>