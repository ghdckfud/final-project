<?php
$conn = mysqli_connect("127.0.0.1:3307","root", "111111", "finalproject");
$sql = "
  INSERT INTO orders (
    fname,
    pay,
    time
  ) VALUES (
    '짬뽕',
    '카드',
    now()
  )";
mysqli_query($conn, $sql);
echo mysqli_error($conn);
?>
