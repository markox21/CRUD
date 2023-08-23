<?php
function connection(){
    $connectionParams = array(
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'alumnos_crud'
    );
    
    $connect = mysqli_connect(
        $connectionParams['host'],
        $connectionParams['user'],
        $connectionParams['password']
    );

    mysqli_select_db($connect, $connectionParams['database']);

    return $connect;
}

?>
