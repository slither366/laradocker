<?php

session_destroy();

$_SESSION = array();

echo '<script>

	window.location = "ingreso";

	</script>
';
