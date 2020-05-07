<html lang="sk">

</html>

<head>
<?php include 'head.php';
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>


<body>

    <header>
    <?php 
    include 'header.php';
    
    ?>
    </header>
    <?php
        include("auth.php");
        
    ?>
    

   


    
    
    <section class="blog">
    <div class="admin-panel flexblog">
        <?php
            include('blog_upload.php');
            ?>
       <form class="novy_clanok flexblog" method="post" enctype="multipart/form-data">
                <label><h3>Nový</h3></label>
                <input type="text" name="title" class="popis"><br>
                <input type="File" name="file" class="prilohy"> <span>obrázok</span><br>
                <input type="File" name="file2"class="prilohy"> <span>pdf</span><br>
                <input type="submit" name="submit">
        </form>
    </div>
    <div class="ucet flexblog">
        <h1 >Ahoj <?php echo $_SESSION['meno']; ?>!</h1>
        <p>Vitaj v mojom blogu o webdizajne</p>
        <a href="logout.php">Odhlásenie</a>
    </div>
    


    <div class="clanky flexblog">
    <table class="table table-striped table-bordered">
             <tbody>
              <?php
                try
                {

                $con = new PDO("mysql:host=localhost;dbname=blog",'root','');


                $sth = $con->prepare( "SELECT * FROM `blog` ORDER BY 1 ASC");
                
                
                
                $sth->setFetchMode(PDO:: FETCH_OBJ);
                
                $sth->execute();
                $i=1;
                while($row=$sth->fetch())
                {   
                ?>

                <tr>
                    
                    <td><img src="../blog/<?php echo $row->img; ?>" style="height:150px;width:150px;"></td>
                    <td><a href=../blog/<?php echo $row->pdf; ?> target="_blank"><?php echo $row->meno; ?></a></td>
                                                           
                </tr>
                <?php } }
                
                catch(PDOException $e){
                echo "Error: ". $e->getMessage();
                    }

                ?>
            </tbody>
    </table>
             
    </div>    

            
    </section>


</body>


</html>