

    <?php   

    
        /* logout.php */
     
    if (!session_id()) session_start();
    /* Vaihtoehtoisia tapoja:
    if(session_status() === PHP_SESSION_NONE) session_start();
    if(!isset($_SESSION)) session_start();
    if(session_id() === "") session_start(); */
    setcookie('emailcookie', '', time() -86400);
    setcookie('passwordcookie', '', time() -86400);
    $_SESSION = array();
    session_destroy();
        
        header("Location: http://localhost:8080/Login-and-User-Aythentication-System-PHP/index.php")
    ;?>
    
