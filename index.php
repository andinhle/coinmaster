<?php 
    include 'src/model/pdo.php';
    include 'views/header/header.php';
    if (isset($_GET['act']) && [$_GET['act']]!=='' ) {
        switch ($_GET['act']) {
            case 'value':
                
                break;
            
            default:
                include 'views/main/home.php';
                break;
        }
    }else {
        include 'views/main/home.php';
    }
    include 'views/footer/footer.php';
?>