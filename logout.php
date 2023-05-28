<?php

session_start();

unset($_SESSION['userAccount']);

session_destroy();

header('Location: index');

?>