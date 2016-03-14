<form  action="/search" method="POST">
<input type="text"  name="q" placeholder="Search.."/>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button type="submit">Search</button>
</form>
