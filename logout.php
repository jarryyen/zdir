<?php
setcookie("loginstatus", "", time()-3600);
header("location:index.php");