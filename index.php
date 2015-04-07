<?php

require "connect.php";

if( !$oidc->isAuthenticated() ) {
  //echo 'check - '.$oidc->isAuthenticated();
  //echo json_encode($_SESSION);
  $oidc->authenticate();
} else {
  echo 'Logged in - ';
}

echo $checkFlag;
echo $oidc->isAuthenticated();

$name = $_SESSION['user']['name'];
?>

<html>
<head>
    <title>Example OpenID Connect Client Use</title>
    <style>
        body {
            font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div>
        Hello <?php echo $name; ?>
    </div>

</body>
</html>
