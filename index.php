<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>[Thực hành] Ứng dụng Từ điển đơn giản</title>
</head>
<body>
  <h2>Từ Điển Anh - Việt</h2>
  <form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type="submit" id="submit" value="Tìm"/>
  </form>
  
  <?php
  $dictionary = array("hello" => "xin chào", "how" => "thế nào", "book" => "quyển vở", "computer" => "máy tính");
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
      if ($word === $searchword) {
        echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
        echo "<br/>";
        $flag = 1;
      }
    }
    
    if ($flag === 0) {
      echo "Không tìm thấy từ cần tra.";
    }
  }
  ?>
</body>
</html>
