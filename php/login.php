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
            
            if (isset($_REQUEST['meno'])){
                $meno = stripslashes($_REQUEST['meno']);
                $meno = mysqli_real_escape_string($con,$meno); 
                $email = stripslashes($_REQUEST['email']);
                $email = mysqli_real_escape_string($con,$email);
                $heslo = stripslashes($_REQUEST['heslo']);
                $heslo = mysqli_real_escape_string($con,$heslo);
                $datum = date("Y-m-d H:i:s");
                 
                $kontrola = "SELECT * FROM `users` WHERE meno='$meno'";
                $kontrolovany = mysqli_query($con,$kontrola);
                $uzexistuje = mysqli_num_rows($kontrolovany);
                    if($uzexistuje > 0)
                    {
                        echo "<div class='pologin'>Užívateľské meno je už obsadené, <a href='login.php'>skús iné </a> <br>
                        
                        </div>";
                    }
                    elseif($uzexistuje==0) {
                                
                        $vloz = "INSERT into `users` (meno, email, heslo, datum) VALUES ('$meno', '$email', '$heslo', '$datum')";
                        $novy = mysqli_query($con, $vloz);

                            if($novy){
                                echo "<div class='pologin'>
                                <h3>Úspešná registrácia</h3>
                                <br/>Pokračuj na <a href='prihlasenie.php'>Prihlásenie</a></div>";
                            }
            }       
            }
            else{
            ?>
            
        
            <form class="uzivatelia" action="" method="post">
                    <input type="text" class="login-input" name="meno" placeholder="meno" required><br>
                    <input type="text" class="login-input" name="email" placeholder="email"><br>
                    <input type="heslo" class="login-input" name="heslo" placeholder="heslo"><br>
                    <input type="submit" name="submit" value="Registrácia" class="login-button">
                    <p class="login-lost">Máš účet? <a href="prihlasenie.php">Prihlás sa tu</a></p>
            </form>
                    
            <?php 
            } 
            ?>
                
        </div>
        

            
    </section>


</body>


</html>