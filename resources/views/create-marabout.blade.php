<form action="{{ route('marabout.create') }}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="text" name="maraboutname" placeholder="Type your name..."><br><br>
	<input type="date" name="activity_begin_date"><br><br>
	<input type="text" name="phone" placeholder="Type your phone number..."><br><br>
	<input type="email" name="mail" placeholder="example@mail.com"><br><br>
	<input type="text" name="address" placeholder="Type your adress..."><br><br>
	<input type="text" name="resume" placeholder="Type a resume..."><br><br>
	<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"><br><br>

	<div class="list-group">
    <label for="">Spécialités : </label><br>
    @foreach ($spells as $spell)
    <label class="list-group-item">
      <input name="spells_list[]" class="form-check-input me-1" type="checkbox" value="{{ $spell->id }}">
      {{ $spell->name }}
    </label>
    @endforeach
  </div>	

	<input type="submit" value="Create Maraboo">
</form>
