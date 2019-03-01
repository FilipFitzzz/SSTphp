<?php 

// echo "Hello World!";

$ime = "Pero";
$Godini = 23;
$_polnoleten = true;
$pi = 3.14;

echo $ime;
echo "<br/>";
echo $Godini;
echo $_polnoleten;
echo $pi;

echo "<h1>".$ime."</h1>";






?>

<h2>PEROOOOOOO!</h2>

<div><?php echo $Godini; ?></div>
<b><?=$Godini?></b>

<?php 

echo "<br/>";

$br = 7;

if($br % 2 == 0) {
    echo "par";
} else {
    echo "nepar";
}

echo "<br/>";

switch($ime) {
    case "Pero":
        echo "ZdravO Pero";
    break;
    case "Janko":
        echo "ZdravO Janko";
    break;
    case "Stanko":
        echo "ZdravO Stanko";
    break;
    default: 
        echo "Nema Zdravo";
    
   
} 

echo "<br/>";

function sobiranje($a, $b) {
    echo $a + $b;
}

echo "<br/>";

sobiranje(5, 6);

echo "<br/>";

function odzemanje($a, $b) {
    return $a - $b; 
}



$res = odzemanje(6, 19);
echo $res;

echo "<br/>";

echo odzemanje(3, 1);

// $ubav = "Januari";
// $neubav = "April"

// function mesec($ubav, $neubav){
//     if(strlen($mesec) % 2) {
//         echo "Ova e ubav mesec";
//     } else {
//         echo "Ova e neubav mesec";
//     }
// }

// mesec($ubav, $neubav);

// switch($ubav, $neubav){
//     case (strlen($ubav) % 2):
//         echo "UBAV MESEC";
//     break;
//     case (strlen($neubav) % 1):
//         echo "neubav MESEC";
//     break;
//     default:
//         echo "nema takov mesec";
    
// }

function ubavMesec($mesec) {
    switch(strlen($mesec) % 2){
        case 0:
            echo "ubav mesec";
        break;
        case 1: 
            echo "neubav mesec";
        break;
    }
}

ubavMesec("Januari");


// *************************************************************************************




?>


