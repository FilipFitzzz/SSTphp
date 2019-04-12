<?php 

    echo $_POST['ime'];
    echo $_POST['prezime'];
    echo $_POST['vistina'];
    print_r($_POST['hrana']);

    if(isset($_POST['vistina'])){
        echo $_POST['vistina'].'<br/>';
    }
?>