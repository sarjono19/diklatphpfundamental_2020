<?php

session_start();

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<body>
	<?php
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "Cat";

		echo "Session Variable are Set .";
	?>
</body>
</html>