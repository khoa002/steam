<?php
$ini = parse_ini_file('.env');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="src/frog.png"/>
    <title><?= $ini["APP_NAME"]; ?></title>
    <link rel="stylesheet" href="src/bootstrap-3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    test
</div>
<script type="text/javascript" src="src/jquery-3.2.1/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="src/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
        console.log('hi"')
    });
</script>
</body>
</html>