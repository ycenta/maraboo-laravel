<form action="{{ route('marabout.update',['marabout'=>$marabout->id]) }}" method="POST">
	@csrf
    @method('PATCH')
	<input type="text" name="name" placeholder="Type your name..." value="{{ $marabout->name }}"><br><br>
	<input type="text" name="phone" placeholder="Type your phone number..." value="{{ $marabout->phone }}"><br><br>
	<input type="email" name="mail" placeholder="example@mail.com" value="{{ $marabout->mail }}"><br><br>
	<input type="text" name="address" placeholder="Type your adress..." value="{{ $marabout->address }}"><br><br>
	<input type="text" name="resume" placeholder="Type a resume..." value="{{ $marabout->resume }}"><br><br>

	<input type="submit" value="Create Maraboo">
</form>
