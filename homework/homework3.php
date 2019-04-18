<?php 

// class File {
//     private $fh;
//     private $filename;

//     public function __construct($fn) {
//         $this->filename = $fn;
//         $this->fh = fopen($this->filename, 'a+');
//     }

//     public function write($text) {
//         fwrite($this->fh, $text);
//     }

//     public function read() {
//         rewind($this->fh);
//         return fread($this->fh, $this->size());
//     }

//     public function size() {
//         return filesize($this->filename);
//     }

// }

// $f = new File('text.txt');
// $f->write('pisi neshto pls');
// echo $f->read();
// echo $f->size();

//****************** KLASA 1 *********************** */

// abstract class Telefon {

//     protected $mobileName;
//     protected $mobileModel;
    
//     public function __construct($mn){
//         $this->mobileName = $mn;
//     }

//     public function __destruct(){
//         echo '<br/> Mobilniot ' . $this->mobileName . ' e nadvor od proizvodstvo';
//     }

//     // функцијата на деструкторот е да ја ослободи меморијата 
//     // која што сме ја искористиле

//     public static $SETTING_NAME = 'S10 PLUS';
//     public static $SETTING_MODEL = 'Note 10';

//     public function setName($n) {
//         $this->mobileName = $n;
//     }

//     public function setModel($m) {
//         $this->mobileModel = $m;
//     }

//     public function getName() {
//         return $this->mobileName;
//     }

//     public function getModel() {
//         return $this->mobileModel;
//     }

// }

// class Mobilen extends Telefon {

//     protected $mobileCameraPx;

//     public function setMobileCamera($c){
//         if(is_int($c)){
//             $this->mobileCameraPx = $c;
//         }
//     }

//     public function getMobileCamera() {
//         return $this->mobileCameraPx;
//     }

//     public function opis() {
//         echo 'Ime na telefon: ' . $this->mobileName . ' Model: ' . $this->mobileModel . ' Kamera: ' . $this->mobileCameraPx;
//     }
// }

// $mb = new Mobilen('Nokia');
// echo '<br/>';
// // $mb->setName('Samsung');
// $mb->setModel(Mobilen::$SETTING_NAME);
// $mb->setMobileCamera(13);
// $mb->opis();
// // print_r($mb);


// !!! дали конструкторо работи ако нема сетери и гетери?????

//***************************************** */

//****************** KLASA 2 *********************** */

// abstract class Computer {
//     protected $computerName;
//     protected $computerModel;

//     public static $COMP_NAME = 'Desktop';
//     public static $COMP_MODEL = 'Apple';

//     public function setName($cn) {
//         $this->computerName = $cn;
//     }

//     public function setModel($cm) {
//         $this->computerModel = $cm;
//     }

//     public function getName() {
//         return $this->computerName;
//     }

//     public function getModel() {
//         return $this->computerModel;
//     }

// }

// class Laptop extends Computer {
//     private $laptopDisplay;

//     public function setDisplay($cd) {
//         if (is_int($cd)) {
//             $this->laptopDisplay = $cd;
//         }
//     }

//     public function getDisplay() {
//         return $this->laptopDisplay;
//     }

//     public function opis() {
//         echo 'Model na kompjuter: ' . $this->computerModel . ' Ime: ' . $this->computerName . ' Laptopite od istata serija se so golemina od ' . $this->laptopDisplay . 'inc displey';
//     }

// }

// $com = new Laptop;
// $com->setName('Apple');
// $com->setModel(Computer::$COMP_NAME);
// $com->setDisplay(15);
// $com->opis();
// // print_r($com);

//***************************************** */

//****************** KLASA 3 *********************** */

// class Book {
//     private $typeBook;
//     private $bookCover;
//     private $bookSide;

//     public static $SET_ILLUSTRATION = 'Illustration';
//     public static $SET_PICTURE = 'Picture';

//     public function __construct($tb){
//         $this->typeBook = $tb;
//     }

//     public function __destruct(){
//         echo 'The ' . $this->typeBook . ' book captures the best feeling';
//     }

//     public function setBookCover($bc){
//         $bc = ['Illustration', 'Picture'];
//         if (is_array($bc)) {
//             $this->bookCover = $bc;
//         }
//     }

//     public function setBookSide($bs){
//         if (is_int($bs)) {
//             $this->bookSide = $bs;
//         }
//     }

//     public function getType(){
//         return $this->typeBook;
//     }

//     public function getBookCover(){
//         return $this->bookCover;
//     }

//     public function getBookSide(){
//         return $this->bookSide;
//     }

// }

// $b = new Book('Printed');
// $b->setBookCover(Book::$SET_ILLUSTRATION);
// $b->setBookSide(123);
// print_r($b);

//***************************************** */

//****************** KLASA 4 *********************** */

// abstract class Country {
//     protected $caName;
//     protected $caArea;
//     protected $caPopulation;

//     public function setName($caN) {
//         $this->caName = $caN;
//     }

//     public function setArea($caA) {
//         if (is_int($caA)) {
//             $this->caArea = $caA;
//         }
//     }

//     public function setPopulation($caP) {
//         if (is_int($caP)) {
//             $this->caPopulation = $caP;
//         }
//     }

//     public function getName(){
//         return $this->caName;
//     }

//     public function getArea(){
//         return $this->caArea;
//     }
//     public function getPopulation(){
//         return $this->caPopulation;
//     }


// }

// class NewCountry extends Country {
//     private $capitalCity;

//     public function __construct($cc){
//         $this->capitalCity = $cc;
//     }

//     public function __destruct(){
//         echo $this->capitalCity . ' e glaven grad na ' . $this->caName . 'so povrshina od ' . $this->caArea . ' kilometri kvadratni i populacija od ' . $this->caPopulation . ' ziteli';
//     }

//     public function setCapitalCity($cac){
//         $this->capitalCity = $cac;
//     }

//     public function getCapitalCity(){
//         return $this->capitalCity;
//     }
    
// }

// $nc = new NewCountry('Skopje');
// // $nc->setCapitalCity('Skopje');
// $nc->setName('Macedonia');
// $nc->setArea(25713);
// $nc->setPopulation(2103721);

//***************************************** */

//****************** KLASA 5 *********************** */

abstract class Watch {

    protected $watchName;
    protected $watchModel;
    
    public function __construct($wn){
        $this->watchName = $wn;
    }

    public function __destruct(){
        echo '<br/> Casovnikot ' . $this->watchName . ' povejke od 200 godini go meri vremeto zaedno so nas';
    }

    public static $SETT_NAME = 'Casio';
    public static $SETT_MODEL = 'PRO-TREK';

    public function setName($wn) {
        $this->watchName = $n;
    }

    public function setModel($wm) {
        $this->watchModel = $wm;
    }

    public function getName() {
        return $this->watchName;
    }

    public function getModel() {
        return $this->watchModel;
    }

}

class Products extends Watch {

    protected $klasa;

    public function setKlasa($k){
        $this->klasa = $k;
    }

    public function getKlasa() {
        return $this->klasa;
    }

    public function description() {
        echo 'Ime: ' . $this->watchName . ' Model: ' . $this->watchModel . ' Klasa: ' . $this->klasa;
    }
}

$w = new Products('Casio');
echo '<br/>';
// $w->setName('Casio');
$w->setModel(Watch::$SETT_MODEL);
$w->setKlasa('WSD-F20AGN');
print_r($w);
































?>

