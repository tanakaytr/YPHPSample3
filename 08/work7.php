<?php require_once("DBManager.class.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>work7</title>
</head>
<body>
<?php
$dbmanager = DBManager::getInstance();
print $dbmanager->getId();
?>
<hr />
<?php
$dbmanager = DBManager::getInstance();

print $dbmanager->getId();
?>
</body>
</html>
