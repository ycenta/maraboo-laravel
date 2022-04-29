<!-- <form action="{{ route('comment.create') }}" method="post">
	@csrf
	<input type="hidden" name="marabout_id" value="{{ $id }}"><br>
	<input type="text" name="content" placeholder="Type your comment here..."><br><br>

	<input type="submit" value="Post">
</form> -->



<form action="{{ route('comment.create') }}" method="post">
	@csrf
	<input type="hidden" name="marabout_id" value="{{ $id }}"><br>
    <div class="mb-3">
      <label class="form-label">Commentaire</label>
      <textarea name="content" class="form-control" rows="3"></textarea>
    </div>
    <input class="btn" type="submit" value="Ajouter le commentaire">
</form>