<!DOCTYPE html>
<html>
  <head
  ><meta charset="utf-8">
  <title>Project</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="./www/fonts.css">
  <link rel="stylesheet" href="./client/styles/client.min.css">
  <?php 
    $array = include('./www/data/initData.php');
    if (empty($array)) return;

    [$scriptsPaths, $initEvents] = $array;      

    foreach($scriptsPaths as $key => $path) { ?>
      <script type='text/javascript' src='<?=$path?>'></script>
  <?php } ?>
</head>
<body>
  <div id="app"></div>
</body>
  <?= $initEvents?>
</html>
