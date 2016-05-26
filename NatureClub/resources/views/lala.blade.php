<link href="{{  asset('packages/home/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{  asset('packages/home/css/poptrxstyle.css') }}" rel="stylesheet" type="text/css" media="all" />

<script src="{{ asset('packages/home/js/jquery-1.11.1.min.js') }}"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>

<script type="text/javascript">
	function changepic(i)
	{	if(i==0) 
			var x = "{{ asset('images/').'/'.$bird['picture'] }}";
		else
			var x = "{{ asset('otherimages/').'/'.$bird['commonName'] }}"+i+".jpg";
		// alert(x);
		$("#bigpic img").attr('src',x);
	}
</script>
<div style="width:100%;height:100%">
	<div id="bigpic" class="col-sm-5">
	<img src="{{ asset('images/').'/'.$bird['picture'] }}" style="width:100%;height:100%;">
</div>
<div class="col-sm-6">
	<table>
	<tr>
		<td>Common Name:</td>
		<td>{{ $bird['commonName'] }}</td>
	</tr>
	<tr>
		<td>Scientific Name:</td>
		<td>{{ $bird['scientificName'] }}</td>
	</tr>
	<tr>
		<td>Local Status:</td>
		<td>{{ $bird['localStatus'] }}</td>		
	</tr>
	<tr>
		<td>General Description:</td>
		<td>{{ $bird['generalDescription'] }}</td>
	</tr>
	<tr>
		<td>Diet:</td>
		<td>{{ $bird['diet'] }}</td>
	</tr>
	<tr>
		<td>Local Breeding:</td>
		<td>{{ $bird['localBreeding'] }}</td>	
	</tr>
	<tr>
		<td>Trivia:</td>
		<td>{{ $bird['trivia'] }}</td>
	</tr>
</table>
	
	@for($i=1; $i<=$bird['images']; $i++)
	<div class="imgs" onclick="changepic({{$i}});">
		<img src="{{ asset('otherimages/').'/'.$bird['commonName'].$i.'.jpg' }}" height="100" width="120"/ >
	</div>
	@endfor
	<div class="imgs" onclick="changepic(0);">
		<img src="{{ asset('images/').'/'.$bird['picture'] }}" height="100" width="120"/ >
	</div>
</div>
</div>