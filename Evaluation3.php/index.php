
<?php




    session_start();

    if(!isset($_COOKIE["message"])){
        setcookie("message", 1);
    }

    $_SESSION['host'] = 'mysql:host=localhost;dbname=convertisseur;charset=utf8';
    $_SESSION['ndcSQL'] = 'root';
    $_SESSION['mdpSQL'] = '';

    $bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);

    $_SESSION['pseudo'] = '';
    $_SESSION['success']= false;
    $_SESSION['login'] = false;
    $_SESSION['userId'] = '';


    header('Location: ./main.php');

?>

