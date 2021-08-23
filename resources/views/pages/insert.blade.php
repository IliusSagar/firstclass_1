<form method="post" action="{{ url('data-added') }}">
	@csrf
	<input type="text" name="name" placeholder="name">
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="phone" placeholder="phone">
	<input type="text" name="description" placeholder="description">
	<input type="submit" name="submit" value="submit">

</form>