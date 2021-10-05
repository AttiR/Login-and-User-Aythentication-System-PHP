<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost:8080/Login-and-User-Aythentication-System-PHP/index.php")
;?>