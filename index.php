<h1>Test 0</h1>
<?php
//HERDOK
//$name = "toto";
//echo <<<EOT
//  Hello $name
// Welcome
// EOT;

//Tableau

//$arr = ['1', '2', 3];

//$arr[] = 'julien';

//var_dump($arr);


/*
$var = 1;
if (2  == $var) {
    echo "var égale à 1";
} else {
    echo "var n'est pas égale à 1";
}

*/
?>
<?php require __DIR__ . '/class/resolver.php'; ?>
<?php require (new resolver(__DIR__, 'inc', 'header'))->getPath() ?>

<p>llllllllllllllllllllllllllllllllllllllllllllllllll</p>
<?php require (new resolver(__DIR__, 'inc', 'footer'))->getPath() ?>