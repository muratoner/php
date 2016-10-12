<?php
    $email = md5("muhackgames@gmail.com");
?>
<html>
    <head>
        <title>Gravatar Use With PHP</title>
    </head>
    <body>
        <img src="http://www.gravatar.com/avatar/<?php  echo $email ?>" />
    </body>
</html>