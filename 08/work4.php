<?php
    require_once "SmartPhoneProduct.class2.php";
    require_once "KeitaiProduct.class.php";
    require_once "KantanProduct.class.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>work4</title>
</head>
<body>

<?php
$product = array();
$product[] = new SmartPhoneProduct("iPhone5", 60000, "Softbank", "Apple");
$product[] = new SmartPhoneProduct("Experia Z Ultra", 50000, "DoCoMo", "Sony");
$product[] = new KeitaiProduct("SH-23", 30000, "DoCoMo", "Sharp");
$product[] = new KantanProduct("P-41", 25000, "DoCoMo", "Panasonic");
?>
<table border="1">
<tr><th>名前</th><th>金額</th><th>キャリア</th><th>メーカ</th><th>カテゴリ</th></tr>
<?php
foreach($product as $pr){
?>
<tr>
    <td><?php print $pr->getName(); ?></td>
    <td><?php print $pr->getPrice(); ?></td>
    <td><?php print $pr->getCarrier(); ?></td>
    <td><?php print $pr->getMaker(); ?></td>
    <td><?php print $pr->getCategoryName(); ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
