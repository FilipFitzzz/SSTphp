<?php 

// со повеќе error handling

if (isset($_POST['submit'])) {
    $file = $_FILES['file']; // ги земаме информациите од фајл

    // $fileName = $file['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];  // вака ги земаме сите информации од фајлот што сакаме да го прикачиме

    $fileExtension = explode('.', $fileName);
    $fileActualExtension = strtolower(end($fileExtension));

    $allowed = array('jpg', 'jpeg', 'png', 'txt');

    // ако $fileActualExtension е нешто од $allowed, тогаш изврши го ифот

    if (in_array($fileActualExtension, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true).".".$fileActualExtension; //во случај ако се прикачи фајл со исто име
                $fileDestination = 'uploads1/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                echo "Фајлот е премногу голем";
            }
        } else {
            echo "Настана некој ерор при прикачувањето!";
        }
    } else {
        echo "Не може да се прикачи таков тип на фајл";
    }



}

?>