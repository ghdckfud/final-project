<?php
$conn = mysqli_connect("127.0.0.1:3307","root", "111111", "finalproject");
settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);
$sql = "SELECT * From orders Where oid={$filtered['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result)
if({$row['time']}+120<now()){
  echo '취소할 수없습니다.<a href="index.php"><br>돌아가기</a>'
}
else{
$sql = "
  DELETE
    FROM orders
    WHERE oid = {$filtered['id']}
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '주문과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
}
else {
  echo '삭제가 완료됐습니다.<a href="index.php"><br>돌아가기</a>';
}
}
?>
