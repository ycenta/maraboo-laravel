<form action="{{ route('marabout.create') }}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="text" name="maraboutname" placeholder="Type your name..."><br>
	<input type="date" name="activity_begin_date"><br>
	<input type="text" name="phone" placeholder="Type your phone number..."><br>
	<input type="email" name="mail" placeholder="example@mail.com"><br>
	<input type="text" name="address" placeholder="Type your adress..."><br>
	<input type="text" name="resume" placeholder="Type a resume..."><br>
	<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"><br>

	<input type="submit" value="Create Maraboo">
</form>
