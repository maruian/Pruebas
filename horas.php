<html>
<head>
<title>
</title>
<meta http-equiv="refresh" content="1" />
<style type="text/css">
  p {
    color: purple;
    background-color: #d8da3d
  }
</style>
</head>
<body>
<p>
<?php
  $importantDate = strtotime("December 1 1981");
  $today = strtotime("now");
  $hours = (($today - $importantDate)/60)/60;
  echo $hours;
?>
</p>
</body>
</html>
