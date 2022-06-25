<?php

$con = mysqli_connect("sql202.epizy.com", "epiz_32000975", "YRcmmPSJPr", "epiz_32000975_escola");

if (mysqli_connect_errno ())  {
    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_error ();
}   else {
        mysqli_select_db ($con,"epiz_32000975_escola");
} 

    ?>