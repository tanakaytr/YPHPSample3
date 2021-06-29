<?php require "SmartPhoneProduct.class.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>work3</title>
</head>
<body>

<?php
$smart_phone = array();
$smart_phone[] = new SmartPhoneProduct("iPhone5", 60000, "Softbank", "Apple");
$smart_phone[] = new SmartPhoneProduct("Experia Z Ultra", 50000, "DoCoMo", "Sony");
$smart_phone[] = new SmartPhoneProduct("HTC J", 35000, "AU", "HTC");
?>
<table border="1">
<tr><th>名前</th><th>金額</th><th>キャリア</th><th>メーカ</th></tr>
<?php
foreach($smart_phone as $sp){
?>
<tr>
    <td><?php print $sp->getName(); ?></td>
    <td><?php print $sp->getPrice(); ?></td>
    <td><?php print $sp->getCarrier(); ?></td>
    <td><?php print $sp->getMaker(); ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
