<h1>Liste Marabout</h1>

<div class="list-marabouts">
	<table>
		<thead>
			<th>Nom</th>
		</thead>
		<tbody>
			@foreach($marabouts as $marabout)
			@dump($marabout)
			@endforeach
		</tbody>
	</table>
</div>