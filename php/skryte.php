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

    <div class="form">
        <h1 >Welcome <?php echo $_SESSION['meno']; ?>!</h1>
        <p >Moj blog.</p>
        
        <a href="odhlasenie.php">Odhlasenie</a>
</div>
        

            
    </section>


</body>


</html>