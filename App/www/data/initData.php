<?php
// php данные в js класс - json_encode($data)
$data = include_once('data.php');

$scriptsPath = (glob("client/scripts/*"));
$initEvents = 
"
  <script type='text/javascript'>
  </script>
";

return [
  $scriptsPath,
  $initEvents,
];