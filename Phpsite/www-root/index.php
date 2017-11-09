<?php
require_once (__DIR__ . "/../www-lib/config.php");
?>











<?php
require(__DIR__ ."/../www-lib/templates/header.php");

?>
<?php
$mydata = getAllProducts(__DIR__ ."/../www-data/sitestockdata.csv");
array_shift($mydata); // You can remove the first row since it has the row headers

if(!empty($mydata)) {
    foreach($mydata as $row) {
        $product  = $row ;
        require(__DIR__ ."/../www-lib/templates/displayproducts.php");

    }
}
else
    echo "Heem i could not get any data ! ";






?>
<a href="page2.php" >Goto page</a>

<?php
require(__DIR__ ."/../www-lib/templates/footer.php");

?>
