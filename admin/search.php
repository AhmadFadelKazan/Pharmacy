
<?php
echo"<form action='".$_SERVER['PHP_SELF']."' method='get'>"?>
<input type="text"  name="search" placeholder="Search of drug">
<input type="hidden" name="do" value="query" />
<button>Search</button>
</form>