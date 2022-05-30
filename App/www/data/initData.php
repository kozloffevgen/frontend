<?php
// php данные в js класс - json_encode($data)
$data = include_once('data.php');

$scriptsPath = (glob("client/scripts/*"));
$initEvents = 
"
  <script type='text/javascript'>
    if (window.InitPage) {
      new InitPage(".json_encode($data).")
    }
  </script>
";

return [
  $scriptsPath,
  $initEvents,
];