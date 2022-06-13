<?php require('../templates/header.php');

require('./db.php');


global $conn;

$conn->query('SET FOREIGN_KEY_CHECKS = 0');
$conn->query('TRUNCATE TABLE participants_naruto');
$conn->query('SET FOREIGN_KEY_CHECKS = 1');

?>

<?php require('../templates/footer.php'); ?>