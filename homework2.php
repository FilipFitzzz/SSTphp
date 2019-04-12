<?php 

class Avtomobili {
    private $autoModel;
    private $autoColor;
    private $autoPrice;

    public function __construct($am, $ac, $ap) {
        $this->autoModel = $am;
        $this->autoColor = $ac;
        $this->autoPrice = $ap;
    }

    public function autoCaracteristic() {
        echo $this->autoModel." e со најдобрите перформанси <br/>";
    }

    public function setAutoModel($am) {
        if(is_string($am)){
            $this->autoModel = $am;
        } else {
            exit('Model must be string');
        }
    }

    public function getAutoModel() {
        return $this->autoModel;
    }

    public function setAutoColor($ac) {
        if(is_string($ac)){
            $this->aitoModel = $ac;
        } else {
            exit('Color must be string');
        }
    }

    public function getAutoColor() {
        return $this->autoColor;
    }

    public function setAutoPrice($ap) {
        if(is_string($ap)){
            $this->aitoModel = $ap;
        } else {
            exit('Price must be string');
        }
    }

    public function getAutoPrice() {
        return $this->autoPrice;
    }
    
}

$a = new Avtomobili('Mercedes', ' Black', ' 20 000');
// $a->autoModel = 'Mercedes';
// $a->autoColor = 'Black';
// $a->autoPrice = '20 000';
$a->setAutoModel('Mercedes');
$a->autoCaracteristic();
echo $a->getAutoModel();
echo $a->getAutoColor();
echo $a->getAutoPrice();

echo '<br/>';
// ************************************* //

class Cvekje {
    private $cvetVid;
    private $cvetBoja;

    public function __construct($cv, $cb) {
        $this->cvetVid = $cv;
        $this->cvetBoja = $cb;
    }

    public function takeCvet() {
        echo $this->cvetVid." Е Многу убав цвет во цел свет <br/> ";
    }

    public function cvet() {
        $this->takeCvet();
    }

    public function setCvetVid($cv) {
        if (is_string($cv)) {
            $this->cvetVid = $cv;
        } else {
            exit('cvetVid must be string');
        }
    }

    public function getCvetVid() {
        return $this->cvetVid;
    }
}

$c = new Cvekje('Ruza', 'Crvena');
    $c->setCvetVid('Zumbul');
    $c->takeCvet();
    echo $c->getCvetVid();

    // ************************************* //

class Monitor {
    private $monitorVid;
    private $monitorBoja;

    public function __construct($mv, $mb) {
        $this->monitorVid = $mv;
        $this->monitorBoja = $mb;
    }

    public function takeMonitor() {
        echo $this->monitorVid." Е многу добар монитор <br/> ";
    }

    public function monitor() {
        $this->takeMonitor();
    }

    public function setMonitorVid($mv) {
        if (is_string($mv)) {
            $this->monitorVid = $mv;
        } else {
            exit('monitorVid must be string');
        }
    }

    public function getMonitorVid() {
        return $this->monitorVid;
    }
}

$m = new Monitor('ASUS', 'Crn');
    $m->setMonitorVid('ASUS');
    $m->takeMonitor();
    echo $m->getMonitorVid();
























?>