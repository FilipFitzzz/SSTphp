<?php 

$a = 10;

while($a < 10) {
    echo "while...<br/>";
    $a++;
}

echo "<br/>";

$b = 1;

do {
    echo $b;
    $b++;

}while ($b < 10);

// **************************************************************


$studenti = [
    ['ime' => 'Pero', 'prezime' => 'Perovski'],
    ['ime' => 'Janko', 'prezime' => 'Jankovski'],
    ['ime' => 'Stanko', 'prezime' => 'Stankovski'],
    ['ime' => 'Petko', 'prezime' => 'Petkovski'],
    ['ime' => 'Ana', 'prezime' => 'Aneska'],
    ['ime' => 'Janko', 'prezime' => 'Jankoski'],
];


foreach($studenti as $student) {
    echo $student['ime']."<br/>";
}

// **************************************************************

foreach($niza as $index => $bukva){
    echo "$index = $bukva<br/>";
}

echo "<hr/>";

// **************************************************************

$stu = ['ime' => 'Pero', 'prezime' => 'Perovski'];

foreach($stu as $key => $value){
    echo "$key = $value<br/>";
}

// **************************************************************

// echo readfile("text.txt");

// $data = file_get_contents('text.txt');
// echo nl2br($data);

$size = filesize('text.txt');
echo "$size<br/>";

$fh = fopen('text.txt', 'r'); 
$data = fread($fh, $size);
fclose($fh);
echo $data;
echo "<br/>"
// **************************************************************

$fh = fopen('newfile.txt' 'a+');
fwrite($fh, 'Test Test TestTestTest TestTestTest');
fclose($fh);

?>