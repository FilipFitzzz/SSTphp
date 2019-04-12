<?php 

// class remoteControl {
//     private $height;
//     private $width;
//     private $numButtons;
//     private $model;

//     public function __construct() {
//         $this->model = $m;
//     }

//     public function turnOn() {
//         echo "The TV has been turned on";
//     }

//     public function turnOff() {
//         echo " The TV has been turned off ";
//     }

//     public function setWidth($w) {
//         $this->width = $w; 
//     }

//     public function getWidth() {
//         return $this->width;
//     }
// }

// $rc1 = new remoteControl();
// $rc1-> turnOn();
// echo '<br/>'
// $rc1->turnOff();

// $rc1->height = 11;
// $rc1->setWidth(4);
// echo $rc1->getWidth();

// $rc2 = new RemoteControl('rc002');
// $rc2->height - 20;


class Ucilnica {
    private $tabla;
    private $klupa;
    private $stolovi;

    public function __construct($s) {
        $this->stolovi = $s;
    }

    public function getIn() {
        echo " Училниците служат за одржување на настава";
    }

    public function setTabla($ut) {
        if (is_string($ut)) {
            $this->tabla = $ut;
        } else {
            exit ('tabla myst be string');
        }
    }

    public function getTabla() {
        return $this->tabla;
    }

    public function setKlupa($uk) {
        if (is_string($uk)) {
            $this->klupa = $uk;
        } else {
            exit ('klupa myst be string');
        }
    }

    public function getKlupa() {
        return $this->klupa;
    }

    public function getStolovi() {
        return $this->stolovi;
    }
    
}

$u = new Ucilnica('Ikea Stol');
$u->setTabla('I Board');
echo $u->getTabla();
echo "<br/>";
$u->setKlupa('Ikea');
echo $u->getKlupa();
echo "<br/>";
echo $u->getStolovi();

echo "<br/>";

class MotornoVozilo {
    protected $kubikazaNaMotor;
    protected $potroshuvachka;

    public function setKubikazaNaMotor($k) {
        $this->kubikazaNaMotor = $k;
    }

    public function setPotroshuvachka($p) {
        $this->kubikazaNaMotor = $p;
    }

    public function getKubikazaNaMotor() {
        return $this->kubikazaNaMotor;
    }

    public function getPotroshuvachka() {
        return $this->potroshuvachka;
    }
}

class Avtomobil extends MotornoVozilo {
    private $klasa;
    
    public function setKlasa($k) {
        $this->klasa = $k;
    }

    public function getKlasa() {
        return $this->klasa;
    }

    public function opis() {
        echo 'Klasa: '. $this->klasa . ' Kubikaza'. $this->getKubikazaNaMotor .
        ' Potroshuvashka: ' . $this->potroshuvachka;
    }
}

$av1 = new Avtomobil;
$av1->setPotroshuvachka(6.5);
$av1->setKubikazaNaMotor(1900);
$av1->setKlasa('sedan');











?>