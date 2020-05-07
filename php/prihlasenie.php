<html lang="sk">

</html>

<head>
<?php include 'head.php';

?>

</head>


<body>

    <header>
    <?php include 'header.php';
    ?>
    </header>

    <section class="login">

        <div class="registracia">
        <?php
            require('db.php');
            session_start();
            if (isset($_POST['meno'])){
                $meno = stripslashes($_REQUEST['meno']);
                $meno = mysqli_real_escape_string($con,$meno);
                $heslo = stripslashes($_REQUEST['heslo']);
                $heslo = mysqli_real_escape_string($con,$heslo);
                    $vloz = "SELECT * FROM `users` WHERE meno='$meno' and heslo='$heslo'";
                    $novy = mysqli_query($con, $vloz);
                    $riadok = mysqli_num_rows($novy);
                    if($riadok==1){
                    $_SESSION['meno'] = $meno;
                    header("Location: blog.php");
                    }else{
                echo "<div class='pologin'>
            <h3>Nesprávne meno alebo heslo</h3>
            <br/>Prihlás sa <a href='prihlasenie.php'>Tu</a></div>";
                }
                }else{
            ?>
                <form class="uzivatelia" action="" method="post" name="login">
                <input type="text" name="meno" placeholder="meno" autofocus><br>
                <input type="password" name="heslo" placeholder="heslo"><br>
                <input type="submit" value="Prihlásenie" name="Prihlásenie" class="login-button">
            <p class="login-lost">Nemáš účet? <a href="login.php">Zaregistruj sa</a></p>
            </form>
            
            <?php } ?>
        </div>
        

            
    </section>


</body>


</html>