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
<?php var_dump($_GET); ?><br><br><br>
<?php var_dump($_POST); ?>
<?php require (new resolver(__DIR__, 'inc', 'header'))->getPath() ?>

<form>
    <input name="name" placeholder="Un nom svp" /><br><br>
    <input name="age" placeholder="Un age svp" /><br><br>
    <input name="yieu" placeholder="ce que vous voulez" /><br><br>
    <button type="submit">Soumettre</button>
</form>

<?php
$data = $_GET;

$name = isset($data['name']) ? $data['name'] : '';
$age = isset($data['age']) ? $data['age'] : '';
$yieu = isset($data['yieu']) ? $data['yieu'] : '';


if ($name && $age && $yieu) {

    echo sprintf('<h1>%s qui a %sans et il a un des yieux %s</h1>', $name, $age, $yieu);
}
?>

<p>Compressing objects: 100% (12/12), done.
    Writing objects: 100% (14/14), 1.85 KiB | 379.00 KiB/s, done.
    Total 14 (delta 0), reused 0 (delta 0), pack-reused 0
    To https://github.com/abakarabdelsalam/R-voir-Cours-PHP.git
    * [new branch] master -> master
    PS C:\xampp\htdocs\R-voir-Cours-PHP\R-voir-Cours-PHP></p>
<?php require (new resolver(__DIR__, 'inc', 'footer'))->getPath() ?>