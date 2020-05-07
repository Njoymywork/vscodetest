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


<div class="neodoslane">

       
    <p>
        <span class="fa fa-times-circle" aria-hidden="true"></span> <br>
        Niekde nastala chyba, skús ešte raz ďakujem! 
    </p>

</div>

<?php 
      //spojenie s databazou
    $con=mysqli_connect("localhost","root","","kontakt") or die(mysqli_error());
      
    // ci bolo stlacene odoslat
    if((isset($_POST['submit'])))
    {
      
    $meno = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $telefon = $con->real_escape_string($_POST['contact']);
    $sprava = $con->real_escape_string($_POST['text']);
     
   
    $sql="INSERT INTO kontakty (meno, email, telefon, sprava) VALUES ('".$meno."','".$email."', '".$telefon."', '".$sprava."')";
    }
    
    if(!$result = $con->query($sql)){
    header("url=neodoslane.php");
    } else {
           header("Location: odoslane.php");
    }  
    
    header("refresh:2; url=kontakt.php");

?>

</body>


</html>


