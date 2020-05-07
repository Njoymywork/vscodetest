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

<section class="kontakt">
        <div class="ico ico0">
                <h2>Alebo ma kontaktuj priamo</h2>
        </div>
        <div class="ico ico1">
                <a href="http://www.facebook.com" class="fa fa-facebook"></a>
        </div>
        <div class="ico ico2">
                <a href="http://www.twitter.com" class="fa fa-twitter"></a>
        </div>
        <div class="ico ico3">
                <a href="http://www.instagram.com" class="fa fa-instagram"></a>
        </div>
        <div class="ico ico4">
                <a href="http://www.pinterest.com" class="fa fa-pinterest"></a>
        </div>
        <div class="ico ico5">
                <a href="tel:00421908343430" class="fa fa-mobile"></a>
        </div>
        <div class="ico ico6">
                <a href="https://goo.gl/maps/ogWk4o768h4cYXkc8" class="fa fa-map-marker"></a>
        </div>
        <div class="ico ico8">
                <a href="#" class="fa fa-sign-in"></a>
        </div>
        <div class="ico ico7">
                <a href="mailto:kontakt@afdizajn.sk" class="fa fa-at"></a>
        </div>
        

        <div class="kontakty kontakt2">

                <h2>Napíš mi správu </h2>
            
                <form class="form" action="spojenie.php" method="POST">
                    <p class="meno">
                    <input type="text" name="name" id="name" placeholder="Tvoje meno" >
                    </p>
                    <p class="mail">
                    <input type="text" name="email" id="email" placeholder="meno@mail.sk" >
                    </p>
                    <p class="telefon">
                    <input type="text" name="contact" id="contact" placeholder="0123 456 789" >
                    </p>    
                    <p class="spravas">
                    <textarea name="text" placeholder="Tvoja správa" ></textarea>
                    </p>
                    <p class="odoslat">
                    <input type="submit" name="submit" value="Odoslať" >
                    </p>
                </form>
        </div>
       
            
               
            
        
</section>
</body>


</html>