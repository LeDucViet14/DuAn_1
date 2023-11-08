<?php
    include "model/contact.php";
    include "model/about.php";
    include "model/pdo.php";
    include "global.php";
    include "view/header.php";
    $contact_home = loadContact();
    if(isset($_GET['act']) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                include "view/home.php";
                break;
            case 'about':
                $about = load_about();
                include "view/about.php";
                break;
            case 'contact':
                include "view/contact.php";
                break;
            case 'facilities':
                include "view/facilities.php";
                break;
            case 'rooms':
                include "view/rooms.php";
                break;

            default:
            include "view/home.php";
            break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";
?>