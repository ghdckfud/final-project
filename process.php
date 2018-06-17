<?php
$conn = mysqli_connect("127.0.0.1:3307","root", "111111", "finalproject");
$sql = "
  INSERT INTO orders
  (fname, pay, time)
  VALUES (
    '{$_POST['fname']}',
    '{$_POST['pay']}',
    now()
  )";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '주문과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
}
else {
  echo '주문이 완료됐습니다.<a href="index.php"><br>돌아가기</a>';
}
?>
