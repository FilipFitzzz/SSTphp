<?php 

class Student {
    // properties
    private $firstName;
    private $lastName;

    public function __construct($fn, $ln) { // иницијализираме објект кој има информација во случајов за студент
        $this->firstName = $fn;
        $this->lastName = $ln;
    }

    // methods (functions)
    public function takeExam(){
        echo $this->firstName." is taking the exam <br/>";
    }

    public function exam () {
        $this->takeExam;
    }

    public function setFirstName($fn) { 
        if (is_string($fn)) {
            $this->firstName = $fn; // Индирекно пристапување до пропертис
        } else {
            exit ('first name must be string');
        }
        
    }
}

$s = new Student('Pero', 'Perovski'); // ***** битно ***** две податоци од ист тип кои чуваат различни информации
// $s->firstName = 'Pero';
// $s->lastName = 'Perovski';
$s->setFirstName('Pero');
$s->takeExam();


$t = new Student('Janko', 'Jankovski'); // ***** битно
// $t->firstName = 'Janko';
// $t->lastName = 'Jankoski';
$t->setFirstName('Filip');
$t->takeExam();


?>