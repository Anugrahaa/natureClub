<link href="{{  asset('packages/home/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{  asset('packages/home/css/poptrxstyle.css') }}" rel="stylesheet" type="text/css" media="all" />

<script src="{{ asset('packages/home/js/jquery-1.11.1.min.js') }}"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>

<script type="text/javascript">
	function changepic(i)
	{	if(i==0) 
			var x = "{{ asset('butterflyimages/').'/'.$butterfly['picture'] }}";
		else if(i==-1)
			var x = "{{ asset('butterflyhotspot/').'/'.$butterfly['hotspot'] }}";
		else
			var x = "{{ asset('otherbutterflyimages/').'/'.$butterfly['commonName'] }}"+i+".jpg";
		// alert(x);
		$("#bigpic img").attr('src',x);
	}
</script>
<div style="width:100%;height:100%">
	<div id="bigpic" class="col-sm-5">
	<img src="{{ asset('butterflyimages/').'/'.$butterfly['picture'] }}" style="width:100%;height:100%;">
</div>
<div class="col-sm-6">
	<table>
	<tr>
		<td>Common Name:</td>
		<td>{{ $butterfly['commonName'] }}</td>
	</tr>
	<tr>
		<td>Scientific Name:</td>
		<td>{{ $butterfly['scientificName'] }}</td>
	</tr>
	<tr>
		<td>Local Status:</td>
		<td>{{ $butterfly['localStatus'] }}</td>		
	</tr>
	<tr>
		<td>General Description:</td>
		<td>{{ $butterfly['generalDescription'] }}</td>
	</tr>
	<tr>
		<td>Host Plants:</td>
		<td>{{ $butterfly['diet'] }}</td>
	</tr>
	<tr>
		<td>Life Cycle:</td>
		<td>{{ $butterfly['localBreeding'] }}</td>	
	</tr>
	<tr>
		<td>Trivia:</td>
		<td>{{ $butterfly['trivia'] }}</td>
	</tr>
	<tr>
		<td>Hotspot:</td>
		<td><div class="imgs" onclick="changepic(-1);">
		<img src="{{ asset('butterflyhotspot/').'/'.$butterfly['hotspot'] }}" height="100" width="120"/ >
	</div></td>
	</tr>
</table>
	@for($i=1; $i<=$butterfly['images']; $i++)
	<div class="imgs" onclick="changepic({{$i}});">
		<img src="{{ asset('otherbutterflyimages/').'/'.$butterfly['commonName'].$i.'.jpg' }}" height="100" width="120"/ >
	</div>
	@endfor
	<div class="imgs" onclick="changepic(0);">
		<img src="{{ asset('butterflyimages/').'/'.$butterfly['picture'] }}" height="100" width="120"/ >
	</div>
</div>
</div>