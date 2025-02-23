<?php 
session_start();

session_unset();
session_destroy();

header("Location: http://localhost:3000/");
header("Location: index.php");