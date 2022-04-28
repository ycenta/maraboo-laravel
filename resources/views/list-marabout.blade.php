<h1>Liste Marabout</h1>

<div class="list-marabouts">
	@foreach($marabouts as $marabout)
	<p><b>Name :</b> {{ $marabout->name }} </p>
	<p><b>Beginning of activity : </b> {{ $marabout->activity_begin_date }} </p>
	<p><b>Phone : </b> {{ $marabout->phone }} </p>
	<p><b>Address : </b> {{ $marabout->address }} </p>
	<p><b>Mail : </b> {{ $marabout->mail }} </p>
	<p><b>Picture : </b> {{ $marabout->picture_url }} </p>
	<p><b>Member since : </b> {{ $marabout->created_at->diffForHumans() }} </p>
	<hr>
	@endforeach
</div>