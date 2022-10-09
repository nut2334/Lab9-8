<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<?php

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); // 2. น าค่า pid ที่สงมากับ ่ URL ก าหนดเป็นเงื่อนไข
$stmt->execute(); // 3. เริ่มค ้นหา
$row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข ้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
?>
<div style="display:flex">
<div style="padding: 15px">
username: <?=$row["username"]?><br>
password: <?=$row["password"]?><br>
ชื่อ : <?=$row["name"]?><br>
ที่อยู่ : <?=$row["address"]?><br>
เบอร์: <?=$row["mobile"]?><br>
อีเมล์: <?=$row["email"]?><br>

</div>
</div>
</body>
</html>