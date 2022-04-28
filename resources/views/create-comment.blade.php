<form action="{{ route('comment.create') }}" method="post">
	@csrf
	<input type="hidden" name="marabout_id" value="{{ $id }}"><br>
	<input type="text" name="content" placeholder="Type your comment here..."><br><br>

	<input type="submit" value="Post">
</form>