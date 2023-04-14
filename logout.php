<?php

session_start();
session_destroy();
header("Location: indexs.php");
exit;
