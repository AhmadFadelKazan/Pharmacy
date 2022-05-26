
<?php
echo"<form action='".$_SERVER['PHP_SELF']."' method='get'>"?>
<input type="text"  name="search" placeholder="Find the name of the medicine here">
<input type="hidden" name="do" value="query" />
<button>Search</button>
</form>