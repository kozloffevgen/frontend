<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once './../configs/database.php';
include_once '../objects/users.php';

$database = new Database();
$db = $database->getConnection();
$users = new users($db);

$stmt = $users->read();
$num = $stmt->rowCount();

if ($num > 0) {
  $users_arr['users'] = [];

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $users_item = array(
          "id" => $id,
          "login" => $login,
          "pass" => html_entity_decode($pass),
      );

      array_push($users_arr['users'], $users_item);
  }
  echo json_encode($users_arr);
}
?>